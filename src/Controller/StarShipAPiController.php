<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StarShipAPiController extends AbstractController
{
    #[Route('/api/starships', name: 'api_starships')]
    public function getCollection(StarshipRepository $repository): Response
    {

        $starships = $repository->findAll();

        return $this->json($starships);
    }
}
