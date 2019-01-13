<?php

namespace App\Repository;

use App\Entity\AdminDeneme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdminDeneme|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminDeneme|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminDeneme[]    findAll()
 * @method AdminDeneme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminDenemeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdminDeneme::class);
    }

    // /**
    //  * @return AdminDeneme[] Returns an array of AdminDeneme objects
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
    public function findOneBySomeField($value): ?AdminDeneme
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
