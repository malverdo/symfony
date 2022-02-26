<?php

namespace App\Infrastructure\Controller;

use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheHttpController  extends AbstractController
{
    public function index(Request $request)
    {


        $response = new Response();
        $response->setEtag(md5('qweq'));
        // Set response as public. Otherwise it will be private by default.
        $response->setPublic();
        // Check that the Response is not modified for the given Request
        if ($response->isNotModified($request)) {
            // return the 304 Response immediately
            return $response;
        }
        // somehow create a Response object, like by rendering a template
        $response = new Response(
            "<html><body>Lucky number: " . 26 . "</body></html>"
        );
        $response->setEtag(md5('qweq'));
        $response->setPublic(); // make sure the response is public/cacheable
        $response->setMaxAge(5);
        // (optional) set a custom Cache-Control directive
        $response->headers->addCacheControlDirective('must-revalidate', true);

        return $response;
    }
}