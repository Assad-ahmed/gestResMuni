<?php

namespace App\Service;

use App\Repository\ExcedentsRepository;
use App\Repository\ProprieteRepository;

class ExcedentsService
{
    private $excedentsRepository;
    private $proprieteRepository;

    public function __construct(ExcedentsRepository $excedentsRepository,ProprieteRepository $proprieteRepository)
    {
        $this->excedentsRepository = $excedentsRepository;
        $this->proprieteRepository = $proprieteRepository;
    }

    public function calculateMonthlyAndYearlyAmounts($propriete_id)
    {
        $excedents = $this->excedentsRepository->findBy(['propriete' => $propriete_id]);
        $proprieteid = $this->proprieteRepository->find($propriete_id);

        $monthlyAmounts = [];
        $yearlyAmounts = [];
        $dates = [];
        $propertyName = $proprieteid ? $proprieteid->getNom(). " ".$proprieteid->getPrenom()  : '';

        foreach ($excedents as $excedent) {
            $year = $excedent->getDate()->format('Y');
            $month = $excedent->getDate()->format('m');
            $date = $excedent->getDate()->format('Y-m-d');
            $montant = (float) $excedent->getMontant();

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
