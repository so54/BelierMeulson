<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{
    protected $primaryKey ='ID_PHOTO';

    public function evenement()
    {
        return $this->belongsTo('App\Models\Evenement', 'ID_EVENT');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeLatestWithUser($query)
    {
        $user = auth()->user();

        return $query->with ('user')->latest ();
    }
}
