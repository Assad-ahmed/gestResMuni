<?php

namespace App\Repository;

use App\Entity\TaxeIndirecte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TaxeIndirecte>
 *
 * @method TaxeIndirecte|null find($id, $lockMode = null, $lockVersion = null)
 * @method TaxeIndirecte|null findOneBy(array $criteria, array $orderBy = null)
 * @method TaxeIndirecte[]    findAll()
 * @method TaxeIndirecte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TaxeIndirecteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TaxeIndirecte::class);
    }

//    /**
//     * @return TaxeIndirecte[] Returns an array of TaxeIndirecte objects
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

//    public function findOneBySomeField($value): ?TaxeIndirecte
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
