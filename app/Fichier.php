<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    protected $fillable =[
        'nom_fichier',
        'url_fichier',
        'description_fichier'
    ];
}
