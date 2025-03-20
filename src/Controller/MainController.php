<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{

  #[Route('/')]
  public function homepage(): Response
  {

    $startshipCount = 457;

    $myShip = [
      'name' => 'USS LaefyCruiser (NCC-0001)',
      'class' => 'Garden',
      'captain' => 'Levi Ackerman',
      'status' => 'under Construction'
    ];


    return $this->render('main/homepage.html.twig', [
      'numberOfStarships' => $startshipCount,
      'myShip' => $myShip,
    ]);
  }
}
