<template>

<h1>Liste Artiste</h1>
<div class="bloc-artist" v-for="artiste in artistes" :key="artiste.id" >
    <h2>{{artiste.name}}</h2>
    <p>{{artiste.birthdate}}</p>
    <p>{{artiste.style}}</p>
    <br>
</div>

</template>

<script>

export default {
    name: 'ArtisteIndex',
    props :['artistes']
}

</script>
