<?php

namespace App\Models;

use App\Models\Album;
use App\Models\Playlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Son extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover',
        'artiste_id',
        'album_id',
    ];

    public function albums(){
        return $this->belongsTo(Album::class);
    }

    public function playlist(){
        return $this->belongsToMany(Playlist::class, 'sons_playlists');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
