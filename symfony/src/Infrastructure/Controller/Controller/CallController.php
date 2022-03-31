<?php

namespace App\Infrastructure\Controller\Controller;

use Symfony\Contracts\Cache\ItemInterface;

class CallController
{
    public function index()
    {

        $a = $this->redisAdapter->getItem('my_cache_key23');
//        $a->set('234');
        dd($value, $a);
    }
}