<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'birthdate',
        'style'
    ];

    public function albums(){
        return $this->hasMany(Album::class);
    }

    public function sons(){
        return $this->hasMany(Son::class);
    }
    public function sonsWithAlbum(){
        return $this->sons()->where('album_id',null);
    }
}
