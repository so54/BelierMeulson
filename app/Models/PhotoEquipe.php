<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoEquipe extends Model
{
    protected $table = 'photo_equipe';


    protected $fillable=[
        'ID_EMPLOYE',
        'NOM_EMPLOYE',
        'FONCTION_EMPLOYE',
        'IMAGE_EMPLOYE'
    ];
}
