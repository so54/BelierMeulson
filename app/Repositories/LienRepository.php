<?php

namespace App\Repositories;

use App\Models\Lien;

class LienRepository extends BaseRepository
{
    public function __construct(Lien $liens)
    {
        $this->model = $liens;
    }
}