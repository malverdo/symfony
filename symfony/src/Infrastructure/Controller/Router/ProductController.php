<?php

namespace App\Infrastructure\Controller\Router;


use App\Service\MessageGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends  AbstractController
{
//    use LoggerAwareTrait;

    /**
     * @var MessageGenerator
     */
    private MessageGenerator $messageGenerator;


    private PriceController $adminEmail;

    private LoggerInterface $logger;

    public function __construct(MessageGenerator $messageGenerator, PriceController $adminEmail)
    {
        $this->messageGenerator = $messageGenerator;
        $this->adminEmail = $adminEmail;
    }

    /**
     * @required
     */
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    public function list(): Response
    {
        $a = $this->logger;
        $response = new Response();
        $response->setContent($this->messageGenerator->getHappyMessage() );
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


}