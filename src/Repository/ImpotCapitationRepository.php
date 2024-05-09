<?php

namespace App\Repository;

use App\Entity\ImpotCapitation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImpotCapitation>
 *
 * @method ImpotCapitation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImpotCapitation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImpotCapitation[]    findAll()
 * @method ImpotCapitation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImpotCapitationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImpotCapitation::class);
    }

//    /**
//     * @return ImpotCapitation[] Returns an array of ImpotCapitation objects
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

//    public function findOneBySomeField($value): ?ImpotCapitation
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
