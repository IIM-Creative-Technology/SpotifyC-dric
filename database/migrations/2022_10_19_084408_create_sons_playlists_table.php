<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sons_playlists', function (Blueprint $table) {
            $table->foreignId('son_id')->constrained('sons','id');
            $table->foreignId('playlist_id')->constrained('playlists','id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sons_playlists_tables');
    }
};
