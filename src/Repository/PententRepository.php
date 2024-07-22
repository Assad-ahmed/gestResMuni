<?php

namespace App\Repository;

use App\Entity\Pentent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pentent>
 *
 * @method Pentent|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pentent|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pentent[]    findAll()
 * @method Pentent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PententRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pentent::class);
    }

//    /**
//     * @return Pentent[] Returns an array of Pentent objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Pentent
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
