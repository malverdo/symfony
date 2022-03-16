<?php

namespace App\Infrastructure\Controller\Controller;

use Dejurin\GoogleTranslateForFree;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class LoggerController
{
    public function index(LoggerInterface $logger)
    {

        $source = 'en';
        $target = 'ru';
        $attempts = 5;
        $text = 'Hello world';

        $tr = new GoogleTranslateForFree();
        $result = $tr->translate($source, $target, $text, $attempts);

        dd($result);

        $logger->info('I just got the logger');
        $logger->error('An error occurred',);
        $logger->log(LogLevel::INFO, 'An error occurred');

        $logger->critical('I left the oven on!', [
            // include extra "context" info in your logs
            'cause' => 'in_hurry',
        ]);
        dd('hello world');
    }
}