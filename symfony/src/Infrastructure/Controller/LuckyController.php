<?php

namespace App\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    /**
     * @throws \Exception
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            "<html><body>Lucky number: " . $number . "</body></html>"
        );
    }
}