<?php

namespace App\Repository;

use App\Entity\TestCompetences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TestCompetences|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestCompetences|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestCompetences[]    findAll()
 * @method TestCompetences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestCompetencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestCompetences::class);
    }

    // /**
    //  * @return TestCompetences[] Returns an array of TestCompetences objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TestCompetences
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
