<?php

namespace App\Repository;

use App\Entity\Cardsmile\Category;
use App\Infrastructure\Base\AbstractBaseRepository;
use Doctrine\Persistence\ManagerRegistry;

class CategoryRepository extends  AbstractBaseRepository
{
    public function getModel(): string
    {
        return Category::class;
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

    public function save(Category $customer)
    {
        $this->managerRegistry->persist($customer);
        $this->managerRegistry->flush();
    }

    public  function saveFlush()
    {
        $this->managerRegistry->flush();
    }

    public function update()
    {
        $this->managerRegistry->flush();
    }

    public function findName($name)
    {
        $createQueryBuilder = $this->createQueryBuilder($this->getTableAlias())
            ->where('c.name = :name')
            ->setParameter('name', $name)
            ->setFirstResult(0)
            ->setMaxResults(3);

        $query = $createQueryBuilder->getQuery();
        return $query->getResult(2);

    }
}