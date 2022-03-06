<?php

namespace App\Repository;

use App\Entity\CardsmilePersonal\Customer;
use App\Infrastructure\Base\AbstractBaseRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CustomerRepository  extends  AbstractBaseRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct('cardsmile_personal', Customer::class, $registry);
    }

    public function save(Customer $customer)
    {
        $this->managerRegistry->persist($customer);
        $this->managerRegistry->flush();
    }

    public function update()
    {
        $this->managerRegistry->flush();
    }

    public function findName($name)
    {
        $createQueryBuilder = $this->createQueryBuilder('c')->where('c.name = :name')->setParameter('name', $name)->setFirstResult(0)->setMaxResults(3);
        $query = $createQueryBuilder->getQuery();
        return $query->getResult();

    }


}