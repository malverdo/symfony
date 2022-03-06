<?php

namespace App\Infrastructure\Base;


use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AbstractBaseRepository extends ServiceEntityRepository
{
    public \Doctrine\Persistence\ObjectManager $managerRegistry;

    public function __construct(string $nameDb, string $entityClass, ManagerRegistry $registry)
    {
        $this->managerRegistry = $registry->getManager($nameDb);
        parent::__construct($registry, $entityClass);
    }
}