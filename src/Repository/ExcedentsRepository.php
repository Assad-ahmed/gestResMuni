<?php

namespace App\Repository;

use App\Entity\Excedents;
use App\Entity\Propriete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Excedents>
 *
 * @method Excedents|null find($id, $lockMode = null, $lockVersion = null)
 * @method Excedents|null findOneBy(array $criteria, array $orderBy = null)
 * @method Excedents[]    findAll()
 * @method Excedents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExcedentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Excedents::class);
    }

    public function findByDate(\DateTime $date)
    {
        return $this->createQueryBuilder('e')
            ->where('e.date = :date')
            ->setParameter('date', $date->format('Y-m-d')) // Assurez-vous que le format correspond à celui de vos données
            ->getQuery()
            ->getResult();
    }

    public function findByMonth(\DateTime $date)
    {
        $startDate = (clone $date)->modify('first day of this month')->setTime(0, 0, 0);
        $endDate = (clone $date)->modify('last day of this month')->setTime(23, 59, 59);

        return $this->createQueryBuilder('i')
            ->where('i.date BETWEEN :start AND :end')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->getQuery()
            ->getResult();
    }

    public function findByYear(\DateTime $date)
    {
        $startDate = (clone $date)->setDate($date->format('Y'), 1, 1)->setTime(0, 0, 0);
        $endDate = (clone $date)->setDate($date->format('Y'), 12, 31)->setTime(23, 59, 59);

        return $this->createQueryBuilder('e')
            ->where('e.date BETWEEN :start AND :end')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Excedents[] Returns an array of Excedents objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//Pour calculer le montant mensuel et annuel des excédents pour chaque propriété
public function findByProprieteAndDateRange(Propriete $propriete, \DateTimeInterface $startDate, \DateTimeInterface $endDate)
{
    return $this->createQueryBuilder('e')
        ->andWhere('e.propriete = :propriete')
        ->andWhere('e.date BETWEEN :start AND :end')
        ->setParameter('propriete', $propriete)
        ->setParameter('start', $startDate)
        ->setParameter('end', $endDate)
        ->getQuery()
        ->getResult();
}


//    public function findOneBySomeField($value): ?Excedents
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
