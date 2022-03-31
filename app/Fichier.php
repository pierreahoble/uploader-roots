<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fichier extends Model
{
    protected $fillable =[
        'nom_fichier',
        'url_fichier',
        'description_fichier',
        'category_id',
        'souscategory_id'
    ];






    /**
     * Get the categorie that owns the Fichier
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }




}


