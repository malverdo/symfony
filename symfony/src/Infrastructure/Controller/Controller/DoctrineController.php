<?php

namespace App\Infrastructure\Controller\Controller;

use App\Entity\Cardsmile\Category;
use App\Entity\Cardsmile\Customer;
use App\Repository\CategoryRepository;
use App\Repository\CustomerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DoctrineController extends AbstractController
{
    private CustomerRepository $customerRepository;
    private CategoryRepository $categoryRepository;

    public function __construct(CustomerRepository $customerRepository, CategoryRepository $categoryRepository)
    {
        $this->customerRepository = $customerRepository;
        $this->categoryRepository = $categoryRepository;
    }

    function test()
    {
        static $i = 0;
        $i++;
    }

    public function index()
    {
        $customerNew = Customer::create('malverdoTestNew2');
        $this->customerRepository->save($customerNew);
        $customer = $this->customerRepository->findName('malverdoTestNew');
//        $b = $customer->categorys->toArray()[0]->getId();
        $ab = $customer->getProducts()->toArray();
//        $category = Category::create($customer,'asd2','malverdo2');
//        $this->categoryRepository->save($category);
//        $b = $this->categoryRepository->findAll();
        $a = 1;
        $b =& $a;
        unset($a);
        dd($ab, $customer, $b);
        $a = $this->customerRepository->findName('malverdo2');
        dd($a);
        $response = new Response('dog');
        return $response;
    }
}