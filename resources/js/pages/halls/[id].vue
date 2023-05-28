<template>
    <HallScreen/>
</template>

<script setup>
import HallScreen from "@/screens/hall-screen/hall-screen.vue";
import {hallModel} from "@/screens/hall-screen/hall-screen.model.js";
import {filmModel} from "@/screens/film-screen/film-screen.model.js";

const props = defineProps({
    film: Object,
    hall: Object
});

const modelHall = hallModel();
modelHall.init(props.hall.data);

const modelFilm = filmModel();
modelFilm.init(props.film.data)
</script>

<style lang="scss" scoped>

</style>