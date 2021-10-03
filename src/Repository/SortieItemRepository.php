<?php

namespace App\Repository;

use App\Entity\SortieItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SortieItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method SortieItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method SortieItem[]    findAll()
 * @method SortieItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SortieItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SortieItem::class);
    }

    // /**
    //  * @return SortieItem[] Returns an array of SortieItem objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SortieItem
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
