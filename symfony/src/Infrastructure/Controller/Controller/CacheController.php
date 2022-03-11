<?php

namespace App\Infrastructure\Controller\Controller;


use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\Cache\ItemInterface;

class CacheController extends AbstractController
{

    private FilesystemAdapter $filesystemAdapter;

    public function __construct()
    {
        $this->filesystemAdapter = new FilesystemAdapter();
    }

    public function index()
    {

    }
}