<?php

namespace App\Infrastructure\Controller\Controller;

use OpenApi\Attributes as OA;
use Symfony\Component\HttpFoundation\Response;


/**
 * @OA\Info(title="My First API", version="0.1")
 */
class SwaggerController
{
    /**
     * @OA\Get(
     *     path="/api/resource.json",
     *     @OA\Response(response="200", description="An example resource")
     * )
     */
    public function index(): Response
    {
        return new Response('dog');
    }
}