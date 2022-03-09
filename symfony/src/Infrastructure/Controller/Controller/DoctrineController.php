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

    public function index()
    {

//        $customerNew = Customer::create('malverdoTest');
//        $this->customerRepository->save($customerNew);
        $customer = $this->customerRepository->findName('malverdoTest');
        $ab = $customer[0]->getProducts()->toArray();
        $ab[0]->setTitle('vk');

//        $category = Category::create($customer[0],'asd2','malverdo2');
//        $this->categoryRepository->save($category);
        $b = $this->categoryRepository->findAll();



        dd($b, $customer, $ab);


        $a = $this->customerRepository->findName('malverdo2');
        dd($a);

        $response = new Response('dog');

        return $response;
    }
}