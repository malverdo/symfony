<?php

namespace App\Entity\CardsmilePersonal;

class Category
{

    private int $id;
    private mixed $customer;
    private string $title;
    private string $content;

    public function setCustomer(Customer $customer)
    {
        $customer->addCategory($this);
        $this->customer = $customer;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public static function create($customer, $title, $content): Category
    {
        $category = new self();
        $category->setCustomer($customer);
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