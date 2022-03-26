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

    /**
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function index()
    {
//        $customerNew = Customer::create('malverdoTest3');
//        $this->customerRepository->save($customerNew);
        $customer = $this->customerRepository->findName('malverdoTest34');





        dd($customer, $customer->isNull(), $customer->getName());

        $response = new Response('dog');

        return $response;
    }
}