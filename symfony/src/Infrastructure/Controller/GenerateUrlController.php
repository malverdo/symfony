<?php

namespace App\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class GenerateUrlController extends AbstractController
{

    public function index()
    {
        try {
            // generate a URL with no route arguments - /blog/list
            $signUpPage = $this->generateUrl('blog_show');
        } catch (RouteNotFoundException $e) { }

        // generate a URL with route arguments - /blog/list?username=qwe
        $userProfilePage = $this->generateUrl('blog_show', [
            'username' => 'qwe',
            'array' => ['qwe','23']
        ]);

        // сгенерированные URL-адреса по умолчанию являются «абсолютными путями». Пройти третий необязательный
        //аргумент для создания разных URL-адресов (например, «абсолютный URL-адрес»)
        // http://symfony.local/blog/list
        $signUpPage = $this->generateUrl('blog_show', [], UrlGeneratorInterface::ABSOLUTE_URL);

        // когда маршрут локализован, Symfony по умолчанию использует текущую локаль запроса
        // передайте другое значение _locale, если вы хотите явно установить локаль
        // /blog/list?_locale=nl
        $signUpPageInDutch = $this->generateUrl('blog_show', ['_locale' => 'nl']);

        dd($signUpPage, $signUpPageInDutch, $userProfilePage);
    }
}