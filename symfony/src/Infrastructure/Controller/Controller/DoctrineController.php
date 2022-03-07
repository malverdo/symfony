<?php

namespace App\Infrastructure\Controller\Controller;

use App\Entity\CardsmilePersonal\Category;
use App\Entity\CardsmilePersonal\Customer;
use App\Repository\CategoryRepository;
use App\Repository\CustomerRepository;
use Doctrine\Persistence\ManagerRegistry;
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
        $customer = $this->customerRepository->findName('malverdo23');
//        $category = Category::create($customer[0],'asd','malverdo2');


//        $this->categoryRepository->save($category);
        $b= $this->categoryRepository->findAll();


        dd( $customer);


        $a = $this->customerRepository->findName('malverdo2');
        dd($a);

        $response = new Response('dog');

        return $response;
    }
}