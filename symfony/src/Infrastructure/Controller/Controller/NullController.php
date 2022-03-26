<?php

namespace App\Infrastructure\Controller\Controller;

use App\Entity\Cardsmile\Customer;
use App\Repository\CategoryRepository;
use App\Repository\CustomerRepository;
use Symfony\Component\HttpFoundation\Response;

class NullController
{
    private CustomerRepository $customerRepository;


    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
//        $customerNew = Customer::create('malverdoTest');
//        $this->customerRepository->save($customerNew);
        $customer = $this->customerRepository->findName('malverdoTest');



        dd($customer);

        $response = new Response('dog');

        return $response;
    }
}