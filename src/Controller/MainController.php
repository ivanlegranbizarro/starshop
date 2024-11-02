<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(StarshipRepository $repository): Response
    {

        $ships = $repository->findAll();

        $myShip = $ships[array_rand($ships)];


        return $this->render('main/homepage.html.twig', [
            'myShip' => $myShip,
            'ships' => $ships
        ]);
    }
}
