<?php

namespace App\Repository;

use App\Entity\CallSchedule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CallSchedule|null find($id, $lockMode = null, $lockVersion = null)
 * @method CallSchedule|null findOneBy(array $criteria, array $orderBy = null)
 * @method CallSchedule[]    findAll()
 * @method CallSchedule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CallScheduleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CallSchedule::class);
    }

    // /**
    //  * @return CallSchedule[] Returns an array of CallSchedule objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CallSchedule
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
