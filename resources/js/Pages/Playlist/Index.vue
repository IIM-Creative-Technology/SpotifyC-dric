h1
<template>

    <h1>Mes playlists</h1>
    <div class="bloc-playlist" v-for="playlist in playlists" :key="playlist.id" >
        <h2>{{playlist.nom}}</h2>
        <br>
    </div>

    </template>

    <script>

    export default {
        name: 'PlaylistsIndex',
        props :['playlists']
    }

    </script>
