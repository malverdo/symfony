<?php

namespace App\Infrastructure\Controller\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CookieController extends AbstractController
{
    public function index(Request $request)
    {

        $response = new Response('dog');
        $cookie = Cookie::create('foo2')
            ->withExpires(time() + 20)
            ->withValue('bar');
        $response->headers->setCookie($cookie);
        return $response;
    }
}