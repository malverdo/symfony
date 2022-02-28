<?php

namespace App\Infrastructure\Subscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ControllerSubscriber  implements EventSubscriberInterface
{


    public static function getSubscribedEvents()
    {
        // return the subscribed events, their methods and priorities
        return [
            KernelEvents::CONTROLLER => [
                ['processException', 10]
            ],
        ];
    }

    public function processException(ControllerEvent $event)
    {
        $a = 0;
        $controller = $event->getController();
//        $event->setController('CookieController');
    }

}