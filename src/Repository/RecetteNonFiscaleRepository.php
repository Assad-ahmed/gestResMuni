<?php

namespace App\Repository;

use App\Entity\RecetteNonFiscale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RecetteNonFiscale>
 *
 * @method RecetteNonFiscale|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecetteNonFiscale|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecetteNonFiscale[]    findAll()
 * @method RecetteNonFiscale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecetteNonFiscaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RecetteNonFiscale::class);
    }

//    /**
//     * @return RecetteNonFiscale[] Returns an array of RecetteNonFiscale objects
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

//    public function findOneBySomeField($value): ?RecetteNonFiscale
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
