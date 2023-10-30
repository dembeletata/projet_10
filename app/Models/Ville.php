<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;


class Ville extends Model
{
    use HasFactory;

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class, 'ville_id');
    }
}
