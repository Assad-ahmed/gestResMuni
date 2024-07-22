<?php

namespace App\Repository;

use App\Entity\Excedents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Excedents>
 *
 * @method Excedents|null find($id, $lockMode = null, $lockVersion = null)
 * @method Excedents|null findOneBy(array $criteria, array $orderBy = null)
 * @method Excedents[]    findAll()
 * @method Excedents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExcedentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Excedents::class);
    }

//    /**
//     * @return Excedents[] Returns an array of Excedents objects
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

//    public function findOneBySomeField($value): ?Excedents
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
