<?php

namespace App\Repository;

use App\Entity\SiteCollecte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SiteCollecte>
 *
 * @method SiteCollecte|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiteCollecte|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiteCollecte[]    findAll()
 * @method SiteCollecte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiteCollecteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SiteCollecte::class);
    }



//    /**
//     * @return SiteCollecte[] Returns an array of SiteCollecte objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SiteCollecte
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
