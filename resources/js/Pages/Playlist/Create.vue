<template>

<h1>Création de playlist</h1>

<form @submit.prevent="sendForm">

<!-- nom,description , image , visibilité -->
<label for="nom">Nom</label>
<input type="text" name="nom" v-model="form.nom">

<label for="description">Description</label>
<textarea name="description" v-model="form.description"></textarea>

<label>Image</label>
<input type="text" name="image" v-model="form.image">

<label for="artiste_id">nom de l'artiste</label>
    <select name="artiste_id" v-model="form.artiste_id">
        <option v-for="artiste in artistes" :key="artiste.id" :value="artiste.id">{{artiste.nom}}</option>

    </select>


<label for="visibilité">visiblity</label>
        <select name="is_public" v-model="form.is_public">
            <option value="1">Public</option>
            <option value="0">Privé</option>
        </select>

<button type="submit" @submit="redirectForm">Ajouter playlist</button>



</form>



</template>

<script>
export default{
    name : 'PlaylistCreate',
    props : ['artistes'],
    data(){
        return {
            form : this.$inertia.form({
                nom: '',
                description: '',
                image: '',
                is_public: '',
            })
        }

    },
    methods: {
        sendForm(){
            this.form.post(route('playlist.store'))
        },
        redirectForm(){
            this.$router.push({ name: "playlist"})
        }
    }
}

</script>
