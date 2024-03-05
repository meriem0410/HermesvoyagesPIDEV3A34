<?php

namespace App\Repository;

use App\Entity\Tickets;
use App\Entity\Transport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tickets>
 *
 * @method Tickets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tickets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tickets[]    findAll()
 * @method Tickets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TicketsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tickets::class);
    }
    public function findByTransport(Transport $transport)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.transport = :transport')
            ->setParameter('transport', $transport)
            ->getQuery()
            ->getResult();
    }
    // Dans votre TransportRepository.php


}
