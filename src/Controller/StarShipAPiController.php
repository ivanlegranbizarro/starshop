<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api/starships')]
class StarShipAPiController extends AbstractController
{
    #[Route('', name: 'api_starships', methods: ['GET'])]
    public function getCollection(StarshipRepository $repository): Response
    {

        $starships = $repository->findAll();

        return $this->json($starships);
    }

    #[Route('/{id<\d+>}', name: 'api_starship', methods: ['GET'])]
    public function get(int $id, StarshipRepository $repository): Response
    {
        return $this->json($repository->find($id) ?? throw $this->createNotFoundException('No starship found with id ' . $id));
    }
}
