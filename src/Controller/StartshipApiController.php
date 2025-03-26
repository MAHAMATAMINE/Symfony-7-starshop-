<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\model\Starship;
use App\Repository\StarshipsRepository;
use Psr\Log\LoggerInterface;


#[Route('/api/starships')]
class StartshipApiController extends AbstractController
{
  #[Route('', methods: ['GET'])]
  public function getCollection(LoggerInterface $logger, StarshipsRepository $repository): Response
  {



    $starShips = $repository->findAll();


    return $this->json($starShips);
  }

  #[Route('/{id<\d+>}', methods: ['GET'])]
  public function get(int $id, StarshipsRepository $repository): Response
  {
    $starShip = $repository->find($id);

    if (!$starShip) {
      throw $this->createNotFoundException('starships not found');
    }

    return $this->json($starShip);
  }
}
