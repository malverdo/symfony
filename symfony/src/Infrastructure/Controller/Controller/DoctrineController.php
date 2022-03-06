<?php

namespace App\Infrastructure\Controller\Controller;

use App\Entity\CardsmilePersonal\Customer;
use App\Repository\CustomerRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DoctrineController extends AbstractController
{

    private CustomerRepository $customerRepository;

    public function __construct(CustomerRepository $customerRepository, )
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
//        $customer = Customer::create('malverdo2');
//        $this->customerRepository->save($customer);
//        $this->customerRepository->findName('malverdo2');

        $a = $this->customerRepository->findName('malverdo2');
        dd($a);

        $response = new Response('dog');

        return $response;
    }
}