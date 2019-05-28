<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoLieu extends Model
{
    protected $table = 'photo_lieux';


    protected $fillable=[
        'id_photo_lieux',
        'nom_photo_lieux',
        'fichier_photo_lieux',
        'id_emplacement_photo'
    ];
}
