<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class TaxCalculator
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function calculateTotalCFPB(): float
    {
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('SUM(i.montant)')
            ->from('App\Entity\ImpotCFPB', 'i');

        return (float) $qb->getQuery()->getSingleScalarResult();
    }

    public function calculateTotalCFPNB(): float
    {
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('SUM(i.montant)')
            ->from('App\Entity\ImpotCFNPB', 'i');

        return (float) $qb->getQuery()->getSingleScalarResult();
    }

    public function calculateTotalTOM(): float
    {
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('SUM(i.montant)')
            ->from('App\Entity\ImpotTOM', 'i');

        return (float) $qb->getQuery()->getSingleScalarResult();
    }

    public function calculateTotalTaxIndirecte(): float
    {
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('SUM(t.montant)')
            ->from('App\Entity\TaxIndirecte', 't');

        return (float) $qb->getQuery()->getSingleScalarResult();
    }

    public function calculateTotalRecettenonFiscale(): float
    {
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('SUM(r.montant)')
            ->from('App\Entity\Recette', 'r');

        return (float) $qb->getQuery()->getSingleScalarResult();
    }

    public function calculateTotalRistourne(): float
    {
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('SUM(r.montant)')
            ->from('App\Entity\Ristournes', 'r');

        return (float) $qb->getQuery()->getSingleScalarResult();
    }
    public function calculateTotalExcedents(): float
    {
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('SUM(e.montant)')
            ->from('App\Entity\Excedents', 'e');

        return (float) $qb->getQuery()->getSingleScalarResult();
    }

    public function calculatePatente(): float
    {
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('SUM(p.montant)')
            ->from('App\Entity\Patente', 'p');

        return (float) $qb->getQuery()->getSingleScalarResult();
    }
}