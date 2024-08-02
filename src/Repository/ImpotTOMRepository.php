<?php

namespace App\Repository;

use App\Entity\ImpotTOM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImpotTOM>
 *
 * @method ImpotTOM|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImpotTOM|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImpotTOM[]    findAll()
 * @method ImpotTOM[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImpotTOMRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImpotTOM::class);
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

//    /**
//     * @return ImpotTOM[] Returns an array of ImpotTOM objects
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

//    public function findOneBySomeField($value): ?ImpotTOM
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
