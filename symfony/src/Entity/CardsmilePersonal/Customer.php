<?php

namespace App\Entity\CardsmilePersonal;

use App\Entity\Cardsmile\Category;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;
use Doctrine\Persistence\Event\PreUpdateEventArgs;

/**
 */
class Customer
{

    /**
     */
    private int $id;

    /**
     */
    private string $name;


    /**
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



}