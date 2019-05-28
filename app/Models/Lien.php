<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lien extends Model
{
    protected $table = 'liens';

    protected $fillable=[
        'ID_LIEN',
        'NOM_LIEN',
        'DESCRIPTION_LIEN',
        'FICHIER_LIEN',
        'id_emplacement'
    ];
}

