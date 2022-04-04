<?php

namespace App\Infrastructure\Console;

class InputTestCommand
{
    protected function configure()
    {
        $this
            ->setName('user:rot')
            ->setDescription('Create a test user.')
            ->addArgument('email', InputArgument::REQUIRED)
            ->addArgument('password', InputArgument::REQUIRED)
            ->addArgument('name', InputArgument::OPTIONAL);
    }
}