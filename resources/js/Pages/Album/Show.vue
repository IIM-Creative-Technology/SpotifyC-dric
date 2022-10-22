<template>

    <h1>Les musique de l'album</h1>
    <div class="album" v-for="son in album.sons" :key="son.id">
        <p>
            {{son.title}}
        </p>
        <img v-if="son.cover" :src="son.cover" alt="son">
    </div>

    </template>

    <script>
    export default{
        name: 'ShowAlbum',
        props : ['album']
    }

    </script>
