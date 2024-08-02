<?php

namespace App\Repository;

use App\Entity\Ristournes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ristournes>
 *
 * @method Ristournes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ristournes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ristournes[]    findAll()
 * @method Ristournes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RistournesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ristournes::class);
    }

    public function findByDate(\DateTime $date)
    {
        return $this->createQueryBuilder('r')
            ->where('r.date = :date')
            ->setParameter('date', $date->format('Y-m-d'))
            ->getQuery()
            ->getResult();
    }

    public function findByMonth(\DateTime $date)
    {
        $startDate = (clone $date)->modify('first day of this month')->setTime(0, 0, 0);
        $endDate = (clone $date)->modify('last day of this month')->setTime(23, 59, 59);

        return $this->createQueryBuilder('r')
            ->where('r.date BETWEEN :start AND :end')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->getQuery()
            ->getResult();
    }

    public function findByYear(\DateTime $date)
    {
        $startDate = (clone $date)->setDate($date->format('Y'), 1, 1)->setTime(0, 0, 0);
        $endDate = (clone $date)->setDate($date->format('Y'), 12, 31)->setTime(23, 59, 59);

        return $this->createQueryBuilder('r')
            ->where('r.date BETWEEN :start AND :end')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Ristournes[] Returns an array of Ristournes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Ristournes
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
