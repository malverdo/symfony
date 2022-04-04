<?php

namespace App\Infrastructure\Console;

use Symfony\Component\Console\Input\InputArgument;

class InputTestOneCommand
{
    protected function configure()
    {
        $this
            ->setName('user:rot')
            ->setDescription('Create a test user.');
    }
}