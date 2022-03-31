<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Droit extends Model
{
    protected $fillable = [
        'categorie', 'souscategorie', 'user_id'
    ];
}
