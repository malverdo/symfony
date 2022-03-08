<?php

namespace App\Entity\Cardsmile;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="category")
 * @Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="text")
     */
    private string $title;

    /**
     * @ORM\Column(type="text")
     */
    private string $content;

    /**
     * Many features have one product. This is the owning side.
     * @ManyToOne(targetEntity="App\Entity\Cardsmile\Customer", inversedBy="categorys")
     * @JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private mixed $customers;

    /**
     * @return Customer
     */
    public function getCustomers(): Customer
    {
        return $this->customers;
    }

    /**
     * @param Customer $customers
     */
    public function setCustomers(Customer $customers): void
    {
        $this->customers = $customers;
    }


    public static function create($customer, $title, $content): Category
    {
        $category = new self();
        $category->setCustomers($customer);
        $category->setTitle($title);
        $category->setContent($content);
        return $category;
    }



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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }


}