<?php

namespace App\Repository;

use App\Entity\Chattext;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Chattext|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chattext|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chattext[]    findAll()
 * @method Chattext[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChattextRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Chattext::class);
    }

    // /**
    //  * @return Chattext[] Returns an array of Chattext objects
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
    public function findOneBySomeField($value): ?Chattext
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
