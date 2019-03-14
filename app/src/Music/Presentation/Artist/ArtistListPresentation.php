<?php

namespace App\Music\Presentation\Artist;

use App\Music\Domain\Artist;

/**
 * Class ArtistListPresentation
 *
 * @author Alfredo Espiritu <alfredo.espiritu.m@gmail.com>
 * @copyright (c) 2019, Orbis
 */
class ArtistListPresentation
{
    /**
     * @param Artist[] $data
     * @return array
     */
    public static function read(array $data)
    {
        $result = [];

        /** @var Artist $item */
        foreach ($data as $item) {
            $result[] = [
                'id' => $item->id(),
                'name' => $item->name(),
                'active' => $item->active()
            ];
        }

        return $result;
    }
}