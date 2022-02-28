<?php

namespace App\Infrastructure\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;

class Requestlistener
{
    public function  onKernelRequest(RequestEvent $event)
    {

        // get controller and request arguments
        $namedArguments = $event->getRequest()->attributes->all();
        $a = $event->getRequest()->cookies;
        $b= '2';

    }
}