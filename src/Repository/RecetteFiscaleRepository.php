<?php

namespace App\Repository;

use App\Entity\RecetteFiscale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RecetteFiscale>
 *
 * @method RecetteFiscale|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecetteFiscale|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecetteFiscale[]    findAll()
 * @method RecetteFiscale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecetteFiscaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RecetteFiscale::class);
    }

//    /**
//     * @return RecetteFiscale[] Returns an array of RecetteFiscale objects
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

//    public function findOneBySomeField($value): ?RecetteFiscale
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
