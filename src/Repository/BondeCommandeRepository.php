<?php

namespace App\Repository;

use App\Entity\BondeCommande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BondeCommande|null find($id, $lockMode = null, $lockVersion = null)
 * @method BondeCommande|null findOneBy(array $criteria, array $orderBy = null)
 * @method BondeCommande[]    findAll()
 * @method BondeCommande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BondeCommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BondeCommande::class);
    }

    // /**
    //  * @return BondeCommande[] Returns an array of BondeCommande objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BondeCommande
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
