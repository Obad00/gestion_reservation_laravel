<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'description',
        'logo',
        'adresse',
        'contact',
        'secteur',
        'ninea',
        'date_creation_association',
        'etat',
        'user_id',
    ];

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
