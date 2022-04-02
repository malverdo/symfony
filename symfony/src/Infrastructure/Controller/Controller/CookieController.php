<?php

namespace App\Infrastructure\Controller\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class CookieController extends AbstractController
{
    /**
     * @var ContainerBagInterface
     */
    protected ContainerBagInterface $params;

    public function __construct(ContainerBagInterface $params)
    {
        $this->params = $params;
    }

    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function index(Request $request)
    {
        $contentsDir = $this->getParameter('app.password') . '/contents';
        $response = new Response('dog');
        $cookie = Cookie::create('foo2')
            ->withExpires(time() + 20)
            ->withValue('bar');
        $response->headers->setCookie($cookie);
        return $response;
    }
}