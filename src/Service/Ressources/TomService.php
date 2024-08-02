<?php

namespace App\Service\Ressources;

use App\Repository\ImpotTOMRepository;
use App\Repository\ProprieteRepository;

class TomService
{
    private $impotTOMRepository;

    public function __construct(ImpotTOMRepository $impotTOMRepository, private ProprieteRepository $proprieteRepository)
    {
        $this->impotTOMRepository= $impotTOMRepository;
    }

    public function calculateMonthlyTom($propriete_id)
    {
        $impotTOMs = $this->impotTOMRepository->findBy(['propriete' => $propriete_id]);

        $propriete = $this->proprieteRepository->find($propriete_id);

        $monthlyAmounts = [];
        $yearlyAmounts = [];
        $dates = [];
        $propertyName = $propriete ? $propriete->getNom(). " ".$propriete->getPrenom()  : '';

        foreach ($impotTOMs as $impotTOM) {
            $year = $impotTOM->getDate()->format('Y');
            $month = $impotTOM->getDate()->format('m');
            $date = $impotTOM->getDate()->format('Y-m-d');
            $montant = (float) $impotTOM->getMontant();

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
