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
        'localité',
        'date_evenement',
        'date_limite_inscription',
        'nombre_place',
        'etat',
        'image',
    ];

    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
