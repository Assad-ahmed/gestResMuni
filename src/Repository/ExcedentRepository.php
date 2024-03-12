<?php

namespace App\Repository;

use App\Entity\Excedent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Excedent>
 *
 * @method Excedent|null find($id, $lockMode = null, $lockVersion = null)
 * @method Excedent|null findOneBy(array $criteria, array $orderBy = null)
 * @method Excedent[]    findAll()
 * @method Excedent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExcedentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Excedent::class);
    }

//    /**
//     * @return Excedent[] Returns an array of Excedent objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Excedent
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
