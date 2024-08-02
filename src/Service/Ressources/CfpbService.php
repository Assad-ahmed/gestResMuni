<?php

namespace App\Service\Ressources;

use App\Repository\ImpotCFPBRepository;
use App\Repository\ProprieteRepository;

class CfpbService
{
    private $impotCFPBRepository;

    public function __construct(ImpotCFPBRepository $impotCFPBRepository,  private ProprieteRepository $proprieteRepository)
    {
        $this->impotCFPBRepository= $impotCFPBRepository;
    }

    public function calculateMonthlyCfpb($propriete_id)
    {
        $impotCFPBs = $this->impotCFPBRepository->findBy(['propriete' => $propriete_id]);

        
        $impotCFNPBs = $this->impotCFPBRepository->findBy(['propriete' => $propriete_id]);
        $propriete = $this->proprieteRepository->find($propriete_id);

        $monthlyAmounts = [];
        $yearlyAmounts = [];
        $dates = [];
        $propertyName = $propriete ? $propriete->getNom(). " ".$propriete->getPrenom()  : '';

        foreach ($impotCFPBs as $impotCFPB) {
            $year = $impotCFPB->getDate()->format('Y');
            $month = $impotCFPB->getDate()->format('m');
            $date = $impotCFPB->getDate()->format('Y-m-d');
            $montant = (float) $impotCFPB->getMontant();

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
