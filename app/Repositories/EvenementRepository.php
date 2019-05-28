<?php

namespace App\Repositories;

use App\Models\Evenement;

class EvenementRepository extends BaseRepository
{
    public function __construct(Evenement $evenements)
{
    $this->model = $evenements;
}
}