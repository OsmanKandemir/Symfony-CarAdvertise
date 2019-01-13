<?php

namespace App\Repository;

use App\Entity\AdminSettings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdminSettings|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminSettings|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminSettings[]    findAll()
 * @method AdminSettings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminSettingsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdminSettings::class);
    }

    // /**
    //  * @return AdminSettings[] Returns an array of AdminSettings objects
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
    public function findOneBySomeField($value): ?AdminSettings
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
