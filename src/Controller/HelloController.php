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
}