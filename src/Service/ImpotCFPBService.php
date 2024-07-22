<?php

namespace App\Service;

use App\Entity\ImpotCFPB;
use Doctrine\ORM\EntityManagerInterface;

class ImpotCFPBService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Calculer la somme des impôts CFPB pour toutes les entités ImpotCFPB enregistrées.
     */
    public function calculerSommeImpotsCFPB(): float
    {
        $repository = $this->entityManager->getRepository(ImpotCFPB::class);
        $impotsCFPB = $repository->findAll();

        $sommeImpots = 0.0;

        foreach ($impotsCFPB as $impotCFPB) {
            $sommeImpots += $impotCFPB->getMontant();
        }

        return $sommeImpots;
    }

}