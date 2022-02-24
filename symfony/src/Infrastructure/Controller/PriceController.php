<?php

namespace App\Infrastructure\Controller;

use App\Service\MessageGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class PriceController
{


    private MessageGenerator $messageGenerator;

    public function __construct(MessageGenerator $messageGenerator)
    {
        $this->messageGenerator = $messageGenerator;
    }


    public function list(): Response
    {


        $response = new Response();
        $response->setContent('asd ');
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}