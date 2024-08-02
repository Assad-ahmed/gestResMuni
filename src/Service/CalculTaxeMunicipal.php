<?php

namespace App\Service;

use App\Repository\ExcedentsRepository;
use App\Repository\ImpotCFNPBRepository;
use App\Repository\ImpotCFPBRepository;
use App\Repository\ImpotTOMRepository;
use App\Repository\PatenteRepository;
use App\Repository\RecetteRepository;
use App\Repository\RistournesRepository;
use App\Repository\TaxIndirecteRepository;

class CalculTaxeMunicipal
{
    private $impotCFNPBRepository;
    private $impotCFPBRepository;
    private $impotTOMRepository;
    private $recetteRepository;
    private $ristournesRepository;
    private $excedentsRepository;
    private $patenteRepository;
    private $taxIndirectRepository;

    public function __construct(
        ImpotCFNPBRepository $impotCFNPBRepository,
        ImpotCFPBRepository $impotCFPBRepository,
        ImpotTOMRepository $impotTOMRepository,
        RecetteRepository $recetteRepository,
        RistournesRepository $ristournesRepository,
        ExcedentsRepository $excedentsRepository,
        PatenteRepository $patenteRepository,
        TaxIndirecteRepository $taxIndirectRepository
    ) {
        $this->impotCFNPBRepository = $impotCFNPBRepository;
        $this->impotCFPBRepository = $impotCFPBRepository;
        $this->impotTOMRepository = $impotTOMRepository;
        $this->recetteRepository = $recetteRepository;
        $this->ristournesRepository = $ristournesRepository;
        $this->excedentsRepository = $excedentsRepository;
        $this->patenteRepository = $patenteRepository;
        $this->taxIndirectRepository = $taxIndirectRepository;
    }

    public function getJournalierTotalMontant(\DateTime $date): float
    {
        $repositories = [
            $this->impotCFNPBRepository,
            $this->impotCFPBRepository,
            $this->impotTOMRepository,
            $this->recetteRepository,
            $this->ristournesRepository,
            $this->excedentsRepository,
            $this->patenteRepository,
            $this->taxIndirectRepository,
        ];

        $totalMontantJournalier = 0;

        foreach ($repositories as $repository) {
            $items = $repository->findByDate($date);
            $MontantJournalier = array_reduce($items, function ($carry, $item) {
                return $carry + $item->getMontant();
            }, 0);

            $totalMontantJournalier+= $MontantJournalier;
        }

        return $totalMontantJournalier;
    }

    public function getMensuelTotalMontant(\DateTime $date): float
    {
        $repositories = [
            $this->impotCFNPBRepository,
            $this->impotCFPBRepository,
            $this->impotTOMRepository,
            $this->recetteRepository,
            $this->ristournesRepository,
            $this->excedentsRepository,
            $this->patenteRepository,
            $this->taxIndirectRepository,
        ];

        $totalMontantMensuel = 0;

        foreach ($repositories as $repository) {
            $items = $repository->findByMonth($date);
            $MontantMensuel = array_reduce($items, function ($carry, $item) {
                return $carry + $item->getMontant();
            }, 0);

            $totalMontantMensuel += $MontantMensuel;
        }

        return $totalMontantMensuel;
    }

    public function getAnnualTotalMontant(\DateTime $date): float
    {
        $repositories = [
            $this->impotCFNPBRepository,
            $this->impotCFPBRepository,
            $this->impotTOMRepository,
            $this->recetteRepository,
            $this->ristournesRepository,
            $this->excedentsRepository,
            $this->patenteRepository,
            $this->taxIndirectRepository,
        ];

        $totalAnnualMontant = 0;

        foreach ($repositories as $repository) {
            $items = $repository->findByYear($date);
            $AnnualMontant = array_reduce($items, function ($carry, $item) {
                return $carry + $item->getMontant();
            }, 0);

            $totalAnnualMontant += $AnnualMontant;
        }

        return $totalAnnualMontant;
    }
}