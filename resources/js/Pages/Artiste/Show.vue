<template>

<h1>L'artiste</h1>
<div class="artiste">
    <h2>{{artiste.name}}</h2>
    <p>{{artiste.birthdate}}</p>
    <p>{{artiste.style}}</p>
</div>
<h3>Ces albums</h3>
<div v-for="album in artiste.albums" :key="album.id">
     <a :href="route('album.show', album.id)">{{ album.nom }}</a>
</div>

</template>

<script>
export default{
    name: 'ShowArtiste',
    props : ['artiste']
}

</script>
