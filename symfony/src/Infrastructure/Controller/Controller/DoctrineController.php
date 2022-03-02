<?php

namespace App\Infrastructure\Controller\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class DoctrineController extends AbstractController
{



    public function index(ManagerRegistry $doctrine)
    {

        $connection = $doctrine->getConnection('cardsmile_personal');
        $result = $connection->fetchAllAssociative('SELECT * FROM customer');

        $response = new Response('dog');

        return $response;
    }
}