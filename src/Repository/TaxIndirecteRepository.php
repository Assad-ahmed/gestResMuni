<?php

namespace App\Repository;

use App\Entity\TaxIndirecte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TaxIndirecte>
 *
 * @method TaxIndirecte|null find($id, $lockMode = null, $lockVersion = null)
 * @method TaxIndirecte|null findOneBy(array $criteria, array $orderBy = null)
 * @method TaxIndirecte[]    findAll()
 * @method TaxIndirecte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TaxIndirecteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TaxIndirecte::class);
    }

//    /**
//     * @return TaxIndirecte[] Returns an array of TaxIndirecte objects
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

//    public function findOneBySomeField($value): ?TaxIndirecte
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
