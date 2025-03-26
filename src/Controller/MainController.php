<?php

namespace App\Controller;

use App\Repository\StarshipsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{

  #[Route('/')]
  public function homepage(StarshipsRepository $starshipRepository): Response
  {
    $ships = $starshipRepository->findAll();
    $startshipCount = count($ships);

    $myShip = $ships[array_rand($ships)];


    return $this->render('main/homepage.html.twig', [
      'numberOfStarships' => $startshipCount,
      'myShip' => $myShip,
    ]);
  }
}
