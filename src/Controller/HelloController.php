<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        $users = [
            ['name'=> 'Tiago Cavalo','cep'=> '00000000'],
            ['name'=> 'Tambor Cavalo','cep'=> '00000001'],
            ['name'=> 'Mau Cavalo','cep'=> '00000002'],
            ['name'=> 'Tameuz Cavalo','cep'=> '00000003'],
        ];

        return $this->render('hello/home.html.twig', [
            'title'=> 'Zoológico',
            'users'=> $users,
        ]);
    }

    #[Route('/animal/{slug}')]
    public function animal(string $slug=null): Response
    {
        $newSlug = str_replace('-',' ', $slug);
        $newSlug = ucwords($newSlug);
        return new Response('Olá, ' . $newSlug);
    }
}