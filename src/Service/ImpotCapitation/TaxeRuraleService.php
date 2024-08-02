<?php

namespace App\Service\ImpotCapitation;

use App\Repository\TaxeRuraleRepository;
use App\Repository\ProprieteRepository;

class TaxeRuraleService
{
    private $taxeRuraleRepository;

    public function __construct(TaxeRuraleRepository $taxeRuraleRepository,  private ProprieteRepository $proprieteRepository)
    {
        $this->taxeRuraleRepository= $taxeRuraleRepository;
    }

    public function calculateMonthlyTaxe($propriete_id)
    {
        $taxeRurales = $this->taxeRuraleRepository->findBy(['propriete' => $propriete_id]);
        $propriete = $this->proprieteRepository->find($propriete_id);

        $monthlyAmounts = [];
        $yearlyAmounts = [];
        $dates = [];
        $propertyName = $propriete ? $propriete->getNom(). " ".$propriete->getPrenom()  : '';

        foreach ($taxeRurales as $taxeRurale) {
            $year = $taxeRurale->getDate()->format('Y');
            $month = $taxeRurale->getDate()->format('m');
            $date = $taxeRurale->getDate()->format('Y-m-d');
            $montant = (float) $taxeRurale->getMontant();

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
