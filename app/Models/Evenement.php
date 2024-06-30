<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

  protected $fillable = [
        'nom',
        'description',
        'localite',
        'date_evenement',
        'date_limite_inscription',
        'nombre_place',
        'image',
        'etat',
        'user_id',
        'association_id'
    ];

    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
