<?php

namespace App\Repository;

use App\Entity\AdminImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdminImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminImage[]    findAll()
 * @method AdminImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminImageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdminImage::class);
    }

    // /**
    //  * @return AdminImage[] Returns an array of AdminImage objects
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
    public function findOneBySomeField($value): ?AdminImage
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
