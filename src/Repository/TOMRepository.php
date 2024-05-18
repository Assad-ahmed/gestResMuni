<?php

namespace App\Repository;

use App\Entity\TOM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TOM>
 *
 * @method TOM|null find($id, $lockMode = null, $lockVersion = null)
 * @method TOM|null findOneBy(array $criteria, array $orderBy = null)
 * @method TOM[]    findAll()
 * @method TOM[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TOMRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TOM::class);
    }

//    /**
//     * @return TOM[] Returns an array of TOM objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TOM
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
