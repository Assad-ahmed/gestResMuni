<?php

namespace App\Service;

use App\Entity\ImpotCFPB;
use App\Repository\ImpotCFNPBRepository;
use Doctrine\ORM\EntityManagerInterface;

class ImpotService
{
    private $entityManager;
    private $impotCFNPBRepository;

    public function __construct(EntityManagerInterface $entityManager, ImpotCFNPBRepository $impotCFNPBRepository)
    {
        $this->entityManager = $entityManager;
        $this->impotCFNPBRepository = $impotCFNPBRepository;
    }

    public function calculateDailyCumulativeForPropriete($proprieteId): array
    {
        $today = new \DateTime();
        $today->setTime(0, 0, 0);

        $tomorrow = clone $today;
        $tomorrow->modify('+1 day');

        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('i')
            ->from('App\Entity\ImpotCFNPB', 'i')
            ->where('i.propriete = :proprieteId')
            ->andWhere('i.date >= :today')
            ->andWhere('i.date < :tomorrow')
            ->setParameter('proprieteId', $proprieteId)
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow);

        $impots = $queryBuilder->getQuery()->getResult();

        $totalAmount = 0;
        foreach ($impots as $impot) {
            $totalAmount += $impot->getMontant();
        }

        return [
            'date' => $today,
            'totalAmount' => $totalAmount,
            'impots' => $impots,
        ];
    }

    public function calculateMonthlyCumulativeForPropriete($proprieteId, $year, $month): array
    {
        $startOfMonth = new \DateTime("$year-$month-01");
        $endOfMonth = clone $startOfMonth;
        $endOfMonth->modify('last day of this month');

        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('i')
            ->from('App\Entity\ImpotCFNPB', 'i')
            ->where('i.propriete = :proprieteId')
            ->andWhere('i.date >= :startOfMonth')
            ->andWhere('i.date <= :endOfMonth')
            ->setParameter('proprieteId', $proprieteId)
            ->setParameter('startOfMonth', $startOfMonth)
            ->setParameter('endOfMonth', $endOfMonth);

        $impots = $queryBuilder->getQuery()->getResult();

        $totalAmount = 0;
        foreach ($impots as $impot) {
            $totalAmount += $impot->getMontant();
        }

        return [
            'startOfMonth' => $startOfMonth,
            'totalAmount' => $totalAmount,
            'impots' => $impots,
        ];
    }
    public function calculateTotalForPropriete($proprieteId): float
    {
        $impots = $this->impotCFNPBRepository->findBy(['propriete' => $proprieteId]);

        $totalAmount = 0;
        foreach ($impots as $impot) {
            $totalAmount += $impot->getMontant();
        }

        return $totalAmount;
    }
}