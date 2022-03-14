<?php

namespace App\Infrastructure\Controller\Controller;


use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\RedisAdapter;
use Symfony\Contracts\Cache\ItemInterface;

class CacheController extends AbstractController
{

//    private FilesystemAdapter $filesystemAdapter;

    private RedisAdapter $redisAdapter;

    public function __construct()
    {
        $client = RedisAdapter::createConnection(
            'redis://172.17.0.1'
        );

//        $this->filesystemAdapter = new FilesystemAdapter('', 0, '/tmp/test');
        $this->redisAdapter = new RedisAdapter($client, '23');
    }

    public function index()
    {

        $value = $this->redisAdapter->get('my_cache_key', function (ItemInterface $item) {
            $item->expiresAfter(200);
            $computedValue = 'foobar';

            return $computedValue;
        });

        dd($value);
    }
}