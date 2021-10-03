<?php

namespace App\Repository;

use App\Entity\MedicItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MedicItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method MedicItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method MedicItems[]    findAll()
 * @method MedicItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MedicItemsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MedicItems::class);
    }

    // /**
    //  * @return MedicItems[] Returns an array of MedicItems objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MedicItems
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
