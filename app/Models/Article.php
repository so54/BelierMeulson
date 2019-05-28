<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $dates = ['DATE_ARTICLE'];

    protected $fillable=[
        'ID_ARTICLE',
        'TITRE_ARTICLE',
        'DESCRIPTION_ARTICLE',
        'DATE_ARTICLE'
    ];
}
