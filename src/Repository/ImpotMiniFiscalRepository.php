<?php

namespace App\Repository;

use App\Entity\ImpotMiniFiscal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImpotMiniFiscal>
 *
 * @method ImpotMiniFiscal|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImpotMiniFiscal|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImpotMiniFiscal[]    findAll()
 * @method ImpotMiniFiscal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImpotMiniFiscalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImpotMiniFiscal::class);
    }

//    /**
//     * @return ImpotMiniFiscal[] Returns an array of ImpotMiniFiscal objects
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

//    public function findOneBySomeField($value): ?ImpotMiniFiscal
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
