<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tuteur;
use App\Models\Image;
use App\Models\Gsang;
use App\Models\Nationalite;
use App\Models\Ville;


class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'classe',
    ];
    public function tuteur() 
    {
        return $this->belongsTo(Tuteur::class, 'tuteur_id');
    }
    public function image()
    {
        return $this->hasOne(Image::class);
    }


    public function nationalite()
    {
        return $this->belongsTo(Nationalite::class, 'nationalite_id');
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class, 'ville_id');
    }

    public function gsang()
    {
        return $this->belongsTo(Gsang::class, 'gsang_id');
    }


}
