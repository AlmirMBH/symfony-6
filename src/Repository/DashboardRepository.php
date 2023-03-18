<?php

namespace App\Repository;

use App\Entity\Dashboard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dashboard>
 *
 * @method Dashboard|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dashboard|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dashboard[]    findAll()
 * @method Dashboard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DashboardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dashboard::class);
    }

    public function save(Dashboard $entity): void
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();        
        $this->getEntityManager()->refresh($entity); // no need to return the object, it refreshes the state
    }


    public function remove(Dashboard $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dashboard[] Returns an array of Dashboard objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Dashboard
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
