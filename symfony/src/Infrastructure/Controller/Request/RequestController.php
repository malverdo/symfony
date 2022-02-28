<?php

namespace App\Infrastructure\Controller\Request;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RequestController extends AbstractController
{
    public function index(Request $request, $a = 1, $b = 3): Response
    {
//        $this->generateUrl('sd');
        $response = new Response('dog' . $a . ' ' . $b);
        return $response;
    }
}