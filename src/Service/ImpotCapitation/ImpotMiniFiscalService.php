<?php

namespace App\Service\ImpotCapitation;

use  App\Repository\ImpotMiniFiscalRepository;
use App\Repository\ProprieteRepository;

class ImpotMiniFiscalService
{
  

    public function __construct(private ImpotMiniFiscalRepository $impotMiniFiscalRepository,  private ProprieteRepository $proprieteRepository)
    {
       
    }

    public function calculateMonthlyImpotMini($propriete_id)
    {
        $impotMiniFiscales = $this->impotMiniFiscalRepository->findBy(['propriete' => $propriete_id]);
        $propriete = $this->proprieteRepository->find($propriete_id);

        $monthlyAmounts = [];
        $yearlyAmounts = [];
        $dates = [];
        $propertyName = $propriete ? $propriete->getNom(). " ".$propriete->getPrenom() : '';

        foreach ($impotMiniFiscales as $impotMiniFiscal) {
            $year = $impotMiniFiscal->getDate()->format('Y');
            $month = $impotMiniFiscal->getDate()->format('m');
            $date = $impotMiniFiscal->getDate()->format('Y-m-d');
            $montant = (float) $impotMiniFiscal->getMontant();

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
