<?php

namespace App\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BlogController  extends AbstractController
{
    /**
     * @throws \Exception
     */
    public function list($int): Response
    {
        $number = random_int(0, $int);

        return new Response(
            "<html><body>Lucky number: " . $number . "</body></html>"
        );
    }
}