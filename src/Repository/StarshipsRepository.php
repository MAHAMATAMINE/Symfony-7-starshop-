<?php

namespace App\Repository;

use App\model\Starship;
use Psr\Log\LoggerInterface;

class StarshipsRepository
{

  public function __construct(private LoggerInterface $logger) {}


  public function findAll(): array
  {

    $this->logger->info('Starship collection retrieved');
    return [
      new Starship(
        1,
        'USS LaefyCruiser (NCC-0001)',
        'Garden',
        'Levi Ackerman',
        'under construction'
      ),

      new Starship(
        2,
        'USS Enterprise (NCC-1701)',
        'Constitution',
        'James T. Kirk',
        'active'
      ),
      new Starship(
        3,
        'Millennium Falcon',
        'YT-1300 Light Freighter',
        'Han Solo',
        'smuggling'
      ),



    ];
  }

  public function find(int $id): ?Starship
  {
    foreach ($this->findAll() as $starship) {
      if ($starship->getId() === $id) {
        return $starship;
      }
    }
    return null;
  }
}
