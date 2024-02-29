<?php

namespace App\Repository;

use App\Entity\TypeImp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeImp>
 *
 * @method TypeImp|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeImp|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeImp[]    findAll()
 * @method TypeImp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeImpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeImp::class);
    }

//    /**
//     * @return TypeImp[] Returns an array of TypeImp objects
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

//    public function findOneBySomeField($value): ?TypeImp
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
