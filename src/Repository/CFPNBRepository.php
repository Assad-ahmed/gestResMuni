<?php

namespace App\Repository;

use App\Entity\CFPNB;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CFPNB>
 *
 * @method CFPNB|null find($id, $lockMode = null, $lockVersion = null)
 * @method CFPNB|null findOneBy(array $criteria, array $orderBy = null)
 * @method CFPNB[]    findAll()
 * @method CFPNB[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CFPNBRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CFPNB::class);
    }

//    /**
//     * @return CFPNB[] Returns an array of CFPNB objects
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

//    public function findOneBySomeField($value): ?CFPNB
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
