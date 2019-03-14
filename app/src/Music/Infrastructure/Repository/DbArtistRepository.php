<?php

namespace App\Music\Infrastructure\Repository;

use App\Libs\Repository\BaseRepository;
use App\Music\Domain\Artist;
use App\Music\Domain\ArtistRepository;

class DbArtistRepository extends BaseRepository implements ArtistRepository
{
    public function all()
    {
        $data = [];

        $query = $this->repository->query('SELECT * FROM artists');

        if ($query->num_rows === 0) {
            return $data;
        }

         while ($row = $query->fetch_array()) {
            $data[] = Artist::create($row['id'], $row['name'], $row['active']);
         }

         return $data;
    }

}