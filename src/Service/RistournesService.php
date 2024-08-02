<?php

namespace App\Service;

use App\Repository\ProprieteRepository;
use App\Repository\RistournesRepository;

class RistournesService
{
   

    public function __construct(private RistournesRepository $ristournesRepository, private ProprieteRepository $proprieteRepository)
    {
    
    }

    public function calculateMonthlyAndYearlyAmounts($propriete_id)
    {
        $ristournes = $this->ristournesRepository->findBy(['propriete' => $propriete_id]);
        $proprieteid = $this->proprieteRepository->find($propriete_id);

        $monthlyAmounts = [];
        $yearlyAmounts = [];
        $dates = [];
        $propertyName = $proprieteid ? $proprieteid->getNom(). " ".$proprieteid->getPrenom()  : '';

        foreach ($ristournes as $ristourne) {
            $year = $ristourne->getDate()->format('Y');
            $month = $ristourne->getDate()->format('m');
            $date = $ristourne->getDate()->format('Y-m-d');
            $montant = (float) $ristourne->getMontant();

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
