<?php

namespace App\Models;

use App\Events\NameSaving;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $primaryKey ='ID_EVENT';

    protected $fillable = [
        'nom_event',
        'date_event',
        'slug'
    ];

    protected $dates =['date_event'];

    public function galerie()
    {
        return $this->hasMany (Photo::class);
    }

    protected $dispatchesEvents = [
        'saving' => NameSaving::class,
    ];
}
