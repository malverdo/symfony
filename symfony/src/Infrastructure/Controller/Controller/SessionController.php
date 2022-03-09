<?php

namespace App\Infrastructure\Controller\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;

class SessionController extends AbstractController
{
    private RequestStack $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function index()
    {
//        $this->requestStack->getSession()->set('sd',['asd']);
        $a = $this->requestStack->getSession()->get('sd');
       dd($this->requestStack->getSession(), $a);
    }
}