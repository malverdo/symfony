<?php

namespace App\Infrastructure\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class SwaggerController
{
    public function index()
    {
        return new Response('dog');
    }
}