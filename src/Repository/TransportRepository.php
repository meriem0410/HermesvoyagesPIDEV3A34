<?php

namespace App\Repository;
use App\Entity\Ticket; 

use App\Entity\Transport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Transport>
 *
 * @method Transport|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transport|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transport[]    findAll()
 * @method Transport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transport::class);
    }   public function getTicketStatistics(): array
    {
        $qb = $this->createQueryBuilder('t');
        $qb->select('t.type, COUNT(ticket.id) as ticketCount');
        $qb->leftJoin('t.tickets', 'ticket'); // Fait une jointure avec l'entité Ticket
        $qb->groupBy('t.type');
    
        return $qb->getQuery()->getResult();
    }
    
    


//    /**
//     * @return Transport[] Returns an array of Transport objects
//     */
//    public function findByExampleField($value): array
//    {
//       return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Transport
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
