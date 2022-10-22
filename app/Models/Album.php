<?php

namespace App\Models;

use App\Models\Son;
use App\Models\Artiste;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'cover',
        'artiste_id',

    ];


    public function artiste() {
        return $this->belongsTo(Artiste::class);
    }

    public function sons(){
        return $this->hasMany(Son::class);
    }

}


