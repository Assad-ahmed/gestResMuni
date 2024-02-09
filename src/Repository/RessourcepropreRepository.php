<?php

namespace App\Repository;

use App\Entity\Ressourcepropre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ressourcepropre>
 *
 * @method Ressourcepropre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ressourcepropre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ressourcepropre[]    findAll()
 * @method Ressourcepropre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RessourcepropreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ressourcepropre::class);
    }

//    /**
//     * @return Ressourcepropre[] Returns an array of Ressourcepropre objects
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

//    public function findOneBySomeField($value): ?Ressourcepropre
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
