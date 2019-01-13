<?php

namespace App\Repository;

use App\Entity\AdminCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdminCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminCategory[]    findAll()
 * @method AdminCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminCategoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdminCategory::class);
    }

    // /**
    //  * @return AdminCategory[] Returns an array of AdminCategory objects
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
    public function findOneBySomeField($value): ?AdminCategory
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
