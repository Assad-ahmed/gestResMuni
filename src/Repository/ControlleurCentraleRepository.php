<?php

namespace App\Repository;

use App\Entity\ControlleurCentrale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControlleurCentrale>
 *
 * @method ControlleurCentrale|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControlleurCentrale|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControlleurCentrale[]    findAll()
 * @method ControlleurCentrale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControlleurCentraleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControlleurCentrale::class);
    }

//    /**
//     * @return ControlleurCentrale[] Returns an array of ControlleurCentrale objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ControlleurCentrale
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
