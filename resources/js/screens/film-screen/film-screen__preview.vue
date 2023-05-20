<template>
    <div :class="cnFilmScreen('preview')">
        <img :class="cnFilmScreen('preview-img')" :src="model.film.poster" alt="image_poster">
        <div :class="cnFilmScreen('preview-title')">
            {{ model.film.name }}
        </div>
    </div>
</template>

<script setup>
import { cnFilmScreen } from "./film-screen.const.js";
import { filmModel } from "./film-screen.model.js";

const model = filmModel();
</script>

<style lang="scss" scoped>
.film-screen__preview {

    &-title {
        font-size: 27px;
        font-family: "Arial";
        padding-top: 40px;
        font-weight: bold;
        color: #f39c42;
    }

    &-img {
        width: 250px;
        height: 365px;
        float: left;
        border: 2px solid #f39c42;
        margin: 2rem 6rem 0;
    }
}
</style>