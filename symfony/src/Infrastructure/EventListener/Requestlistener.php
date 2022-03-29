<?php

namespace App\Infrastructure\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;

class Requestlistener
{
    public function  onKernelRequest(RequestEvent $event)
    {
        $namedArguments = $event->getRequest()->attributes->all();
        $a = $event->getRequest()->cookies;
        $b= '2';

    }
}