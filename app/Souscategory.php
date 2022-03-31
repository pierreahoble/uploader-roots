<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Souscategory extends Model
{
    
    protected $fillable = [ 
        'libelle',
        'category_id'
    ];
}
