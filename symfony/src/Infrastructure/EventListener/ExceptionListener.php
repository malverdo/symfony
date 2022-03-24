<?php

namespace App\Infrastructure\EventListener;

use http\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class ExceptionListener
{
    public function onKernelException(ExceptionEvent $event)
    {

//        $exception = $event->getThrowable();
//        if (is_a($exception,'InvalidArgumentException')) {
//            $message = $exception->getMessage();
//            $array = ['Error' => $message];
//            // Customize your response object to display the exception details
//            $response = new Response();
//            $response->setContent(json_encode($array, JSON_UNESCAPED_UNICODE));
//
//            // HttpExceptionInterface is a special type of exception that
//            // holds status code and header details
//            if ($exception instanceof HttpExceptionInterface) {
//                $response->setStatusCode($exception->getStatusCode());
//                $response->headers->replace($exception->getHeaders());
//
//
//            } else {
//                $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
//            }
//
//            // sends the modified response object to the event
//            $event->setResponse($response);
//        }
    }
}