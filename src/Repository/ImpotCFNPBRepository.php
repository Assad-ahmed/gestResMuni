<?php

namespace App\Repository;

use App\Entity\ImpotCFNPB;
use App\Entity\Propriete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImpotCFNPB>
 *
 * @method ImpotCFNPB|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImpotCFNPB|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImpotCFNPB[]    findAll()
 * @method ImpotCFNPB[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImpotCFNPBRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImpotCFNPB::class);
    }

    public function findByDateAndPropriete(\DateTimeInterface $date, $proprieteId): array
    {
        return $this->createQueryBuilder('i')
            ->where('i.date = :date')
            ->andWhere('i.propriete = :proprieteId')
            ->setParameter('date', $date->format('Y-m-d'))
            ->setParameter('proprieteId', $proprieteId)
            ->getQuery()
            ->getResult();
    }

    public function findByMonthAndYearAndPropriete(int $month, int $year, $proprieteId): array
    {
        return $this->createQueryBuilder('i')
            ->where('MONTH(i.date) = :month')
            ->andWhere('YEAR(i.date) = :year')
            ->andWhere('i.propriete = :proprieteId')
            ->setParameter('month', $month)
            ->setParameter('year', $year)
            ->setParameter('proprieteId', $proprieteId)
            ->getQuery()
            ->getResult();
    }

    public function findByYearAndPropriete(int $year, $proprieteId): array
    {
        return $this->createQueryBuilder('i')
            ->where('YEAR(i.date) = :year')
            ->andWhere('i.propriete = :proprieteId')
            ->setParameter('year', $year)
            ->setParameter('proprieteId', $proprieteId)
            ->getQuery()
            ->getResult();
    }



    public function findByDate(\DateTime $date)
    {
        return $this->createQueryBuilder('i')
            ->where('i.date = :date')
            ->setParameter('date', $date->format('Y-m-d'))
            ->getQuery()
            ->getResult();
    }

    public function findByMonth(\DateTime $date)
    {
        $startDate = (clone $date)->modify('first day of this month')->setTime(0, 0, 0);
        $endDate = (clone $date)->modify('last day of this month')->setTime(23, 59, 59);

        return $this->createQueryBuilder('i')
            ->where('i.date BETWEEN :start AND :end')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->getQuery()
            ->getResult();
    }

    public function findByYear(\DateTime $date)
    {
        $startDate = (clone $date)->setDate($date->format('Y'), 1, 1)->setTime(0, 0, 0);
        $endDate = (clone $date)->setDate($date->format('Y'), 12, 31)->setTime(23, 59, 59);

        return $this->createQueryBuilder('i')
            ->where('i.date BETWEEN :start AND :end')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->getQuery()
            ->getResult();
    }
//    }

public function findByProprieteAndDateRange(Propriete $propriete, \DateTimeInterface $startDate, \DateTimeInterface $endDate)
{
    return $this->createQueryBuilder('i')
        ->andWhere('i.propriete = :propriete')
        ->andWhere('i.date BETWEEN :start AND :end')
        ->setParameter('propriete', $propriete)
        ->setParameter('start', $startDate)
        ->setParameter('end', $endDate)
        ->getQuery()
        ->getResult();
}
//    public function findOneBySomeField($value): ?ImpotCFNPB
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
