<?php

namespace App\Infrastructure\Controller;

use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CacheHttpController  extends AbstractController
{
    public function index()
    {
        // somehow create a Response object, like by rendering a template
        $response = $this->render('blog/index.html.twig', []);

        // cache publicly for 3600 seconds
        $response->setPublic();
        $response->setMaxAge(3600);

        // (optional) set a custom Cache-Control directive
        $response->headers->addCacheControlDirective('must-revalidate', true);

        return $response;
    }
}