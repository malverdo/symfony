<?php

namespace App\Infrastructure\Controller\Controller;

use Dejurin\GoogleTranslateForFree;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoggerController extends AbstractController
{
    public GoogleTranslateForFree $translate;

    public function __construct(GoogleTranslateForFree $translate)
    {
        $this->translate = $translate;
    }

    public function index(LoggerInterface $logger)
    {
        throw new \InvalidArgumentException('asd');
        $source = 'en';
        $target = 'ru';
        $attempts = 5;
        $text = 'Привет мирф';

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