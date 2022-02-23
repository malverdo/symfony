<?php

namespace App\Controller;


use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{



    public function list(MessageGenerator $messageGenerator): Response
    {
        $response = new Response();
        $response->setContent($messageGenerator);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}