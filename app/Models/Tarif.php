<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $table = 'correspond';

    protected $fillable=[
        'ID_QUOTIENT',
        'ID_PERIODE',
        'ID_CATEGORIE',
        'TARIF'
    ];
}

