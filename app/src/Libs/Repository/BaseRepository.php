<?php

namespace App\Libs\Repository;

class BaseRepository {

    protected $repository;

    public function __construct(\mysqli $con)
    {
        $this->repository = $con;
    }
}