<?php

namespace App\Repository;

use App\Entity\Ristournes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ristournes>
 *
 * @method Ristournes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ristournes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ristournes[]    findAll()
 * @method Ristournes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RistournesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ristournes::class);
    }

//    /**
//     * @return Ristournes[] Returns an array of Ristournes objects
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

//    public function findOneBySomeField($value): ?Ristournes
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
