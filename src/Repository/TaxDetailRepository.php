<?php

namespace App\Repository;

use App\Entity\TaxDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TaxDetail>
 *
 * @method TaxDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method TaxDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method TaxDetail[]    findAll()
 * @method TaxDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TaxDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TaxDetail::class);
    }

//    /**
//     * @return TaxDetail[] Returns an array of TaxDetail objects
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

//    public function findOneBySomeField($value): ?TaxDetail
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
