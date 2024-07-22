<?php

namespace App\Repository;

use App\Entity\Patente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Patente>
 *
 * @method Patente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Patente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Patente[]    findAll()
 * @method Patente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Patente::class);
    }

//    /**
//     * @return Patente[] Returns an array of Patente objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Patente
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
