<?php

namespace App\Repository;

use App\Entity\ImpotAssiValeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImpotAssiValeur>
 *
 * @method ImpotAssiValeur|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImpotAssiValeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImpotAssiValeur[]    findAll()
 * @method ImpotAssiValeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImpotAssiValeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImpotAssiValeur::class);
    }

//    /**
//     * @return ImpotAssiValeur[] Returns an array of ImpotAssiValeur objects
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

//    public function findOneBySomeField($value): ?ImpotAssiValeur
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
