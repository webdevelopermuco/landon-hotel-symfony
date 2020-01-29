<?php

namespace App\Repository;

use App\Entity\Hotels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping\OrderBy;

/**
 * @method Hotels|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hotels|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hotels[]    findAll()
 * @method Hotels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HotelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hotels::class);
    }

    public function findAllBelowPrice($price){

        /*$this->createQueryBuilder('h')
            ->andWhere('h.price < :price')
            ->setParameter('price', $price)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();*/

        $entityManager = $this->getEntityManager();

        return $entityManager->createQuery('select h from App\Entity\Hotels h where h.price < :price
           order by h.id asc')
            ->setParameter('price', $price)
            ->execute();

    }

    // /**
    //  * @return Hotels[] Returns an array of Hotels objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hotels
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
