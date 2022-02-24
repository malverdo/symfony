<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    # изменить кодировку
    public function getCharset(): string
    {
        return 'UTF-8';
    }

      #изменить ProjectDir - /home/apps/symfony
      #public function getProjectDir(): string
      #{
      #    return \dirname(__DIR__);
      #}

    #хранение кеша - /home/apps/symfony/var/cache/dev
    public function getCacheDir(): string
    {
        return $this->getProjectDir().'/var/cache/'.$this->environment;
    }

    #хранение log - /home/apps/symfony/var/log
    public function  getLogDir(): string
    {
        return $this->getProjectDir().'/var/log';
    }
}
