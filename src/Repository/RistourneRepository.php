<?php

namespace App\Repository;

use App\Entity\Ristourne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ristourne>
 *
 * @method Ristourne|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ristourne|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ristourne[]    findAll()
 * @method Ristourne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RistourneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ristourne::class);
    }

//    /**
//     * @return Ristourne[] Returns an array of Ristourne objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Ristourne
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
