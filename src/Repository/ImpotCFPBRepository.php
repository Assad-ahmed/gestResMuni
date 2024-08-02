<?php

namespace App\Repository;

use App\Entity\ImpotCFPB;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImpotCFPB>
 *
 * @method ImpotCFPB|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImpotCFPB|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImpotCFPB[]    findAll()
 * @method ImpotCFPB[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImpotCFPBRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImpotCFPB::class);
    }

    public function findByDate(\DateTime $date)
    {
        return $this->createQueryBuilder('i')
            ->where('i.date = :date')
            ->setParameter('date', $date->format('Y-m-d'))
            ->getQuery()
            ->getResult();
    }


    public function calculerSommeMontants(): float
    {
        $qb = $this->createQueryBuilder('i')
            ->select('SUM(i.montant) as totalMontant')
            ->getQuery();

        return (float) $qb->getSingleScalarResult();
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

//    /**
//     * @return ImpotCFPB[] Returns an array of ImpotCFPB objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ImpotCFPB
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
