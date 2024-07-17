<?php

namespace App\Repository;

use App\Entity\ImpotCFNPB;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImpotCFNPB>
 *
 * @method ImpotCFNPB|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImpotCFNPB|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImpotCFNPB[]    findAll()
 * @method ImpotCFNPB[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImpotCFNPBRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImpotCFNPB::class);
    }

//    /**
//     * @return ImpotCFNPB[] Returns an array of ImpotCFNPB objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ImpotCFNPB
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
