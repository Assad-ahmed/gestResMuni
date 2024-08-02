<?php

namespace App\Service;

use App\Repository\RecetteRepository;
use App\Repository\ProprieteRepository;

class RecetteService
{
   

    public function __construct(private RecetteRepository $recetteRepository, private ProprieteRepository $proprieteRepository)
    {
    
    }

    public function calculateMonthlyAndYearlyAmounts($propriete_id)
    {
        $recettes = $this->recetteRepository->findBy(['propriete' => $propriete_id]);
        $proprieteid = $this->proprieteRepository->find($propriete_id);

        $monthlyAmounts = [];
        $yearlyAmounts = [];
        $dates = [];
        $propertyName = $proprieteid ? $proprieteid->getNom(). " ".$proprieteid->getPrenom()  : '';

        foreach ($recettes as $recette) {
            $year = $recette->getDate()->format('Y');
            $month = $recette->getDate()->format('m');
            $date = $recette->getDate()->format('Y-m-d');
            $montant = (float) $recette->getMontant();

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
