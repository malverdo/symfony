<?php

namespace App\Entity\CardsmilePersonal;

use App\Repository\CustomerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

/**
 *
 */
class Customer
{

    /**
     *
     */
    private int $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * string
     */
    private string $name;

    public static function create($name): Customer
    {
        $customer = new self();
        $customer->setName($name);
        return $customer;
    }

    private mixed $category;

    public function __construct()
    {
        $this->category = new ArrayCollection();
    }

    public function addCategory(Category $category)
    {
        $this->category[] = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

//    /**
//     * @return PersistentCollection
//     */
//    public function getCategory(): PersistentCollection
//    {
//        return $this->category;
//    }
//
//    /**
//     * @param PersistentCollection $category
//     */
//    public function setCategory(PersistentCollection $category): void
//    {
//        $this->category = $category;
//    }

}