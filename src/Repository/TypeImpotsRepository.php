<?php

namespace App\Repository;

use App\Entity\TypeImpots;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeImpots>
 *
 * @method TypeImpots|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeImpots|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeImpots[]    findAll()
 * @method TypeImpots[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeImpotsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeImpots::class);
    }

//    /**
//     * @return TypeImpots[] Returns an array of TypeImpots objects
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

//    public function findOneBySomeField($value): ?TypeImpots
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
