<?php

namespace App\Repository;

use App\Entity\Asc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Asc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Asc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Asc[]    findAll()
 * @method Asc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AscRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Asc::class);
    }

    // /**
    //  * @return Asc[] Returns an array of Asc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Asc
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
