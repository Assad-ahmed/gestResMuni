<?php

namespace App\Service\Ressources;

use App\Repository\PatenteRepository;
use App\Repository\ProprieteRepository;

class PatenteService
{
   

    public function __construct(private PatenteRepository $patenteRepository,  private ProprieteRepository $proprieteRepository)
    {
        
    }

    public function calculateMonthlyPatente($propriete_id)
    {
        $impotCFPBs = $this->patenteRepository->findBy(['propriete' => $propriete_id]);

        
        $patentes = $this->patenteRepository->findBy(['propriete' => $propriete_id]);
        $propriete = $this->proprieteRepository->find($propriete_id);

        $monthlyAmounts = [];
        $yearlyAmounts = [];
        $dates = [];
        $propertyName = $propriete ? $propriete->getNom(). " ".$propriete->getPrenom()  : '';

        foreach ($patentes as $patente) {
            $year = $patente->getDate()->format('Y');
            $month = $patente->getDate()->format('m');
            $date = $patente->getDate()->format('Y-m-d');
            $montant = (float) $patente->getMontant();

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
