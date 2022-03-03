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

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {


        $a = $this->customerRepository->findAll();

        dd($a);

        $response = new Response('dog');

        return $response;
    }
}