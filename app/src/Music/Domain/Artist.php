<?php

namespace App\Music\Domain;

/**
 * Class Artist
 *
 * @author Alfredo Espiritu <alfredo.espiritu.m@gmail.com>
 * @copyright (c) 2019
 */
class Artist
{
    protected $id;
    protected $name;
    protected $active;

    public static function create($id, $name, $active = true)
    {
        $object = new self();

        $object->id = $id;
        $object->name = $name;
        $object->active = $active;

        return $object;
    }

    public function id()
    {
        return $this->id;
    }

    public function name()
    {
        return $this->name;
    }

    public function active()
    {
        return $this->active;
    }

    public function deactivate()
    {
        $this->active = false;
    }
}