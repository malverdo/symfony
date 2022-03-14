<?php

namespace App\Infrastructure\Controller\Controller;


use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\RedisAdapter;
use Symfony\Contracts\Cache\ItemInterface;

class StopController extends AbstractController
{


    public function __construct()
    {

    }

    public function index()
    {


    }
}