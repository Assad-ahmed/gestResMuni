<?php

namespace App\Service\Ressources;


use App\Repository\ProprieteRepository;
use App\Repository\TaxIndirecteRepository;

class TaxIndirecteService
{
   

    public function __construct(private TaxIndirecteRepository $taxIndirecteRepository,  private ProprieteRepository $proprieteRepository)
    {
        
    }

    public function calculateMonthlyTaxInd($propriete_id)
    {
        $taxeIndirectes = $this->taxIndirecteRepository->findBy(['propriete' => $propriete_id]);

        $propriete = $this->proprieteRepository->find($propriete_id);

        $monthlyAmounts = [];
        $yearlyAmounts = [];
        $dates = [];
        $propertyName = $propriete ? $propriete->getNom(). " ".$propriete->getPrenom()  : '';

        foreach ($taxeIndirectes as $taxeIndirecte) {
            $year = $taxeIndirecte->getDate()->format('Y');
            $month = $taxeIndirecte->getDate()->format('m');
            $date = $taxeIndirecte->getDate()->format('Y-m-d');
            $montant = (float) $taxeIndirecte->getMontant();

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
