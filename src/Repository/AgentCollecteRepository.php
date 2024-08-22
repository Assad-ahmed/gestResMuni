<?php

namespace App\Repository;

use App\Entity\AgentCollecte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AgentCollecte>
 *
 * @method AgentCollecte|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgentCollecte|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgentCollecte[]    findAll()
 * @method AgentCollecte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgentCollecteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgentCollecte::class);
    }

    public function findContributorsWithPaymentsByAgent(AgentCollecte $agent)
    {
        $qb = $this->createQueryBuilder('a')
            ->join('a.sites', 's')
            ->join('s.contributeurs', 'c')
            ->leftJoin('c.paiements', 'p')
            ->where('a.id = :agentId')
            ->setParameter('agentId', $agent->getId())
            ->select('s.nom as siteName, c.nom as contributorName, SUM(p.montant) as totalAmount, COUNT(p.id) as paymentsCount')
            ->groupBy('s.id, c.id');

        return $qb->getQuery()->getResult();
    }

//    /**
//     * @return AgentCollecte[] Returns an array of AgentCollecte objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AgentCollecte
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
