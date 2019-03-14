<?php

namespace App\Music\Application\Artist;

use App\Music\Domain\ArtistRepository;

class ArtistListService
{
    private $artistRepository;

    public function __construct(ArtistRepository $artistRepository)
    {
        $this->artistRepository = $artistRepository;
    }

    public function getAll()
    {
        return $this->artistRepository->all();
    }

}