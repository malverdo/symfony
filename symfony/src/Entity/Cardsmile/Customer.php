<?php

namespace App\Entity\Cardsmile;

use App\Entity\Cardsmile\Category;
use App\Infrastructure\Null\NullCustomer;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity(repositoryClass="App\Repository\CustomerRepository")
 * @Table(name="customer")
 */
class Customer
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $name;


    /**
     * One product has many features. This is the inverse side.
     * @OneToMany(targetEntity="App\Entity\Cardsmile\Category", mappedBy="customers")
     */
    private mixed $categorys;

    public function __construct() {
        $this->categorys = new ArrayCollection();
    }

    /**
     * @return Collection|Category[]
     */
    public function getProducts(): Collection
    {
        return $this->categorys;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->categorys->contains($category)) {
            $this->categorys[] = $category;
            $category->setCustomers($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        if ($this->categorys->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getCustomers() === $this) {
                $category->setCustomers(null);
            }
        }

        return $this;
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

    public static function create($name): Customer
    {
        $customer = new self();
        $customer->setName($name);
        return $customer;
    }

    public function isNull(): bool
    {
        return false;
    }

    public static function newNull(): NullCustomer
    {
        return new NullCustomer();
    }
}