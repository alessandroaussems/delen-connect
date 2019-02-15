<?php

namespace App\Repository;

use App\Entity\AccountManager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AccountManager|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountManager|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountManager[]    findAll()
 * @method AccountManager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountManagerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AccountManager::class);
    }

    // /**
    //  * @return AccountManager[] Returns an array of AccountManager objects
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
    public function findOneBySomeField($value): ?AccountManager
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
