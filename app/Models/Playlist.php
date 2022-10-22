<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'image',
        'is_public',
        'artiste_id'
    ];

    public function sons(){
        return $this->belongsToMany(Son::class, 'sons_playlists');
    }


}
