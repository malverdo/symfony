<?php

namespace App\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
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