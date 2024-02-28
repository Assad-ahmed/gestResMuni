<?php

namespace App\Repository;

use App\Entity\Contributeurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Contributeurs>
 *
 * @method Contributeurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contributeurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contributeurs[]    findAll()
 * @method Contributeurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContributeursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contributeurs::class);
    }

//    /**
//     * @return Contributeurs[] Returns an array of Contributeurs objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Contributeurs
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
