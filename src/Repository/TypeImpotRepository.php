<?php

namespace App\Repository;

use App\Entity\TypeImpot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeImpot>
 *
 * @method TypeImpot|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeImpot|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeImpot[]    findAll()
 * @method TypeImpot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeImpotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeImpot::class);
    }

//    /**
//     * @return TypeImpot[] Returns an array of TypeImpot objects
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

//    public function findOneBySomeField($value): ?TypeImpot
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
