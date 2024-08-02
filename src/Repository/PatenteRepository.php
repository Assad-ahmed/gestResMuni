<?php

namespace App\Repository;

use App\Entity\Patente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Patente>
 *
 * @method Patente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Patente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Patente[]    findAll()
 * @method Patente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Patente::class);
    }

    public function findByDate(\DateTime $date)
    {
        return $this->createQueryBuilder('p')
            ->where('p.date = :date')
            ->setParameter('date', $date->format('Y-m-d'))
            ->getQuery()
            ->getResult();
    }

    public function findByMonth(\DateTime $date)
    {
        $startDate = (clone $date)->modify('first day of this month')->setTime(0, 0, 0);
        $endDate = (clone $date)->modify('last day of this month')->setTime(23, 59, 59);

        return $this->createQueryBuilder('p')
            ->where('p.date BETWEEN :start AND :end')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->getQuery()
            ->getResult();
    }

    public function findByYear(\DateTime $date)
    {
        $startDate = (clone $date)->setDate($date->format('Y'), 1, 1)->setTime(0, 0, 0);
        $endDate = (clone $date)->setDate($date->format('Y'), 12, 31)->setTime(23, 59, 59);

        return $this->createQueryBuilder('p')
            ->where('p.date BETWEEN :start AND :end')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Patente[] Returns an array of Patente objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Patente
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
