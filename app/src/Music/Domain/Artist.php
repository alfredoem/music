<?php

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

    public static function construct($id, $name)
    {
        $object = new self();

        $object->id = $id;
        $object->name = $name;
        $object->active = true;

        return $object;
    }

    public function deactivate()
    {
        $this->active = false;
    }
}