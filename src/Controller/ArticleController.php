<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('My First page');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        //return new Response('Use the function show for a new page url');
        return new Response(sprintf(
            'Future page to show the article: %s',
            $slug));
    }
}