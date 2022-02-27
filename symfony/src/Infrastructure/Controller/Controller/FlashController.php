<?php

namespace App\Infrastructure\Controller\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FlashController extends AbstractController
{


    public function index()
    {
        $response = new Response('asd');
        $this->addFlash('as','asdasd');
        return $response;
    }
}