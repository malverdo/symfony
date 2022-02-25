<?php

namespace App\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BlogController  extends AbstractController
{
    /**
     * @throws \Exception
     */
    public function list($page): Response
    {
        $int = 2;
        $number = random_int(0, $page);

        return new Response(
            "<html><body>Lucky number: " . $number . "</body></html>"
        );
    }
}