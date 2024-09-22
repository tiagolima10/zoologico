<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {

    #[Route('/')]
    public function index(): Response
    {
        return new Response('Olá, Mundo!');
    }

    #[Route('/dinossauro')]
    public function interna(): Response
    {
        return new Response('Olá, Dinossauro');
    }

    #[Route('/mamiferos')]
    public function mamiferos(): Response
    {
        return new Response('Olá, Mamífero!');
    }

    #[Route('/invertebrados')]
    public function invertebrados(): Response
    {
        return new Response('Olá, Invertebrado!');
    }

    #[Route('/insetos')]
    public function teste(): Response
    {
        return new Response('Olá, inseto!');
    }

    #[Route('/aves')]
    public function aves(): Response
    {
        return new Response('Olá, ave!');
    }

    #[Route('/felinos')]
    public function felinos(): Response
    {
        return new Response('Olá, felino!');
    }

    #[Route('/caninos')]
    public function caninos(): Response
    {
        return new Response('Olá, canino!');
    }

    #[Route('/roedores')]
    public function roedores(): Response
    {
        return new Response('Olá, roedor!');
    }
}