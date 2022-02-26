<?php

namespace App\Infrastructure\Controller;

use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CacheHttpController  extends AbstractController
{
    public function index()
    {
        // somehow create a Response object, like by rendering a template
        $response = new Response(
            "<html><body>Lucky number: " . rand() . "</body></html>"
        );

        // cache publicly for 3600 seconds
        $response->setPublic();
        $response->setMaxAge(60);


        // (optional) set a custom Cache-Control directive
        $response->headers->addCacheControlDirective('must-revalidate', true);

        return $response;
    }
}