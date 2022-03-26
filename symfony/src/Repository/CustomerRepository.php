<?php

namespace App\Repository;

use App\Entity\Cardsmile\Customer;
use App\Infrastructure\Base\AbstractBaseRepository;
use App\Infrastructure\Null\NullCustomer;
use Doctrine\Persistence\ManagerRegistry;

class CustomerRepository  extends  AbstractBaseRepository
{
    public function getModel(): string
    {
        return Customer::class;
    }

    public function getBD(): string
    {
        return 'cardsmile';
    }

    public function getTableAlias(): string
    {
        return 'c';
    }


    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($this->getBD(), $this->getModel(), $registry);
    }

    public function save(Customer $customer)
    {
        $this->managerRegistry->persist($customer);
        $this->managerRegistry->flush();
    }

    public function saveFlush()
    {
        $this->managerRegistry->flush();
    }

    public function update()
    {
        $this->managerRegistry->flush();
    }

    /**
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findName($name)
    {
        $createQueryBuilder = $this->createQueryBuilder($this->getTableAlias())
            ->where('c.name = :name')
            ->setParameter('name', $name)
            ->setFirstResult(0)
            ->setMaxResults(3);

        $query = $createQueryBuilder->getQuery();
        return $query->getOneOrNullResult() ?? Customer::newNull();
    }


}