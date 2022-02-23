<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{



    public function list(LoggerInterface $logger): Response
    {
        $logger->info('Look, I just used a service!');
        $response = new Response();
        $response->setContent('hello world');
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}