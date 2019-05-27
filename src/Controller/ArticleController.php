<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
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
        // return new Response(sprintf(
        //     'Future page to show the article: %s',
        //     $slug));

        $comments = [
            'Me encantan los tacos!',
            'Los de suadero son lo mejor',
            'Todos los tacos son ricos!!'
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}