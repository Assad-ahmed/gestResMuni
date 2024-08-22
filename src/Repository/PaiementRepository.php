<?php

namespace App\Repository;

use App\Entity\Contributeurs;
use App\Entity\Paiement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;

/**
 * @extends ServiceEntityRepository<Paiement>
 *
 * @method Paiement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Paiement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Paiement[]    findAll()
 * @method Paiement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaiementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry,  LoggerInterface $logger)
    {
        parent::__construct($registry, Paiement::class);
        $this->logger = $logger;
    }
    public function findByContributeurAndDay(Contributeurs $contributeur, \DateTime $date)
    {
        $startDate = (clone $date)->setTime(0, 0, 0); // Début de la journée
        $endDate = (clone $date)->setTime(23, 59, 59);

        $this->logger->info('Dates de recherche', [
            'startDate' => $startDate->format('d-m-Y H:i:s'),
            'endDate' => $endDate->format('d-m-Y H:i:s')
        ]);

        return $this->createQueryBuilder('p')
            ->andWhere('p.contributeur = :contributeur')
            ->andWhere('p.date BETWEEN :startDate AND :endDate')
            ->setParameter('contributeur', $contributeur)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->getQuery()
            ->getResult();
    }
    public function findByContributeurAndMonth(Contributeurs $contributeur, \DateTime $date)
    {
        $startDate = (clone $date)->modify('first day of this month midnight');
        $endDate = (clone $date)->modify('last day of this month 23:59:59');

        return $this->createQueryBuilder('p')
            ->andWhere('p.contributeur = :contributeur')
            ->andWhere('p.date BETWEEN :startDate AND :endDate')
            ->setParameter('contributeur', $contributeur)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->getQuery()
            ->getResult();
    }

    //

    // par site de collecte
    public function findPaiementsByContributeurAndDate(Contributeurs $contributeur, \DateTime $date): array
    {
        $qb = $this->createQueryBuilder('p')
            ->where('p.contributeur = :contributeur')
            ->andWhere('p.date = :date')
            ->setParameter('contributeur', $contributeur)
            ->setParameter('date', $date)
            ->getQuery();

        return $qb->getResult();
    }

    public function findPaiementsByContributeurAndMonth(Contributeurs $contributeur, \DateTime $date): array
    {
        $start = (clone $date)->setDate($date->format('Y'), $date->format('m'), 1);
        $end = (clone $start)->modify('last day of this month');

        $qb = $this->createQueryBuilder('p')
            ->where('p.contributeur = :contributeur')
            ->andWhere('p.date BETWEEN :start AND :end')
            ->setParameter('contributeur', $contributeur)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery();

        return $qb->getResult();
    }

//    /**
//     * @return Paiement[] Returns an array of Paiement objects
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

//    public function findOneBySomeField($value): ?Paiement
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
