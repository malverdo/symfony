<?php

namespace App\Infrastructure\Controller;

use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CacheHttpController  extends AbstractController
{
    public function index(Request $request)
    {

        $response = new Response(
            "<html><body>Lucky number: " . 31 . "</body></html>"
        );
        $response->setPublic();
        // установка tag след запрос если tag такой же верни 304
        $response->setEtag('2w');
        $response->isNotModified($request);
        return $response;
    }
}