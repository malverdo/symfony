<?php

namespace App\Infrastructure\EventListener;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;

class ControllerArguments
{

    public function onKernelControllerArguments(ControllerArgumentsEvent $event)
    {

        // get controller and request arguments
        $namedArguments = $event->getRequest()->attributes->all();
        $controllerArguments = $event->getArguments();


        // set the controller arguments to modify the original arguments or add new ones
        $event->setArguments($controllerArguments);
    }

}