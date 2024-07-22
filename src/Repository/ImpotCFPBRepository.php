<?php

namespace App\Repository;

use App\Entity\ImpotCFPB;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImpotCFPB>
 *
 * @method ImpotCFPB|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImpotCFPB|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImpotCFPB[]    findAll()
 * @method ImpotCFPB[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImpotCFPBRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImpotCFPB::class);
    }

    public function calculerSommeMontants(): float
    {
        $qb = $this->createQueryBuilder('i')
            ->select('SUM(i.montant) as totalMontant')
            ->getQuery();

        return (float) $qb->getSingleScalarResult();
    }

//    /**
//     * @return ImpotCFPB[] Returns an array of ImpotCFPB objects
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

//    public function findOneBySomeField($value): ?ImpotCFPB
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
