<template>
    <FilmScreen/>
</template>

<script setup>
import FilmScreen from "@/screens/film-screen/film-screen.vue";
import {filmModel} from "@/screens/film-screen/film-screen.model.js";

const props = defineProps({
    film: Object
});

const model = filmModel();
model.init(props.film.data);

console.log(model.film)
</script>

<style lang="scss" scoped>

</style>