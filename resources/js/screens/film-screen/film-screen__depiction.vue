<template>
    <div :class="cnFilmScreen('depiction')">
        <div :class="cnFilmScreen('depiction-text')">
            {{ model.film.description }}
        </div>
    </div>
</template>

<script setup>
import { cnFilmScreen } from "./film-screen.const.js";
import { filmModel } from "./film-screen.model.js";

const model = filmModel();
</script>

<style lang="scss" scoped>
.film-screen__depiction {
    display: flex;
    justify-content: center;

    margin: 3rem 7rem 0;
    &-text {
        font-family: "Arial";
        font-size: 25px;
        text-decoration: none;
        list-style-type: none;
        color: #d0d0d0;
    }
}
</style>