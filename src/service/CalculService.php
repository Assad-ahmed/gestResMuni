<?php

namespace App\service;

class CalculService
{
    private $impotCFPBService;

    public function __construct(ImpotCFPBService $impotCFPBService)
    {
        $this->impotCFPBService = $impotCFPBService;
    }

    public function obtenirSommeImpots(): float
    {
        return $this->impotCFPBService->calculerSommeImpotsCFPB();
    }

    public function obtenirListeImpots(): array
    {
        // Remplacez par votre logique pour obtenir la liste des impôts
        return [
            ['typeImpotAssi' => 'Type 1', 'montantCumule' => 100],
            ['typeImpotAssi' => 'Type 2', 'montantCumule' => 200],
        ];
    }
}