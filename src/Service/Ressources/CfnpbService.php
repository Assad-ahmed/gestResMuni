<?php

namespace App\Service\Ressources;

use App\Repository\ImpotCFNPBRepository;
use App\Repository\ProprieteRepository;

class CfnpbService
{
    private $impotCFNPBRepository;
   
    

    public function __construct(ImpotCFNPBRepository $impotCFNPBRepository, private ProprieteRepository $proprieteRepository)
    {
        $this->impotCFNPBRepository= $impotCFNPBRepository;
    }

    public function calculateMonthlyCfnpb($propriete_id)
    {
        $impotCFNPBs = $this->impotCFNPBRepository->findBy(['propriete' => $propriete_id]);

        $propriete = $this->proprieteRepository->find($propriete_id);

        $monthlyAmounts = [];
        $yearlyAmounts = [];
        $dates = [];
        $propertyName = $propriete ? $propriete->getNom(). " ".$propriete->getPrenom()  : '';

        foreach ($impotCFNPBs as $impotCFNPB) {
            $year = $impotCFNPB->getDate()->format('Y');
            $month = $impotCFNPB->getDate()->format('m');
            $date = $impotCFNPB->getDate()->format('Y-m-d');
            $montant = (float) $impotCFNPB->getMontant();

            if (!isset($monthlyAmounts[$year][$month])) {
                $monthlyAmounts[$year][$month] = ['total' => 0, 'entries' => []];
            }
            if (!isset($yearlyAmounts[$year])) {
                $yearlyAmounts[$year] = 0;
            }
            if (!isset($dates[$year][$month])) {
                $dates[$year][$month] = [];
            }

            $monthlyAmounts[$year][$month]['entries'][] = ['date' => $date, 'montant' => $montant];
            $monthlyAmounts[$year][$month]['total'] += $montant;
            $yearlyAmounts[$year] += $montant;
            $dates[$year][$month][] = $date;
        }

        $totalMensuelGlobal = 0;
        foreach ($monthlyAmounts as $year => $months) {
            foreach ($months as $month => $data) {
                $totalMensuelGlobal += $data['total'];
            }
        }

        $totalAnnuelGlobal = array_sum($yearlyAmounts);

        return [
            'monthlyAmounts' => $monthlyAmounts,
            'yearlyAmounts' => $yearlyAmounts,
            'dates' => $dates,
            'totalMensuelGlobal' => $totalMensuelGlobal,
            'totalAnnuelGlobal' => $totalAnnuelGlobal,
            'propertyName' => $propertyName,
        ];
    }
}
