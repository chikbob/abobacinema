<template>
    <div :class="cnFilmScreen('description')">
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">Вік:</div>{{ model.film.age }}+
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">{{ textDirector }}</div>{{ checkArray(model.film.directors, 'director').toString()}}
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">Рік виходу:</div>{{ model.film.year }}
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">{{ textLanguage }}</div>{{ checkArray(model.film.languages, 'language').toString()}}
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">{{ textGenre }}</div>{{ checkArray(model.film.genres, 'genre').toString()}}
        </div>
        <div :class="cnFilmScreen('description-item')"> 
            <div :class="cnFilmScreen('description-item_orange')">Тривалість:</div>{{ checkNull(model.film.duration/60) }} hours  {{ Math.floor((model.film.duration%60)) }} minutes
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">{{ textCountry }}</div>{{ (checkArray(model.film.countries, 'country')).toString() }}
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">{{ textStudio }}</div>{{ (checkArray(model.film.studios, 'studio')).toString() }}
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { cnFilmScreen } from "./film-screen.const.js";
import { filmModel } from "./film-screen.model.js";

let textStudio = ref("Студія:")
let textCountry = ref("Країна:")
let textDirector = ref("Режисер:")
let textLanguage = ref("Мова:")
let textGenre = ref("Жанр:")

function checkNull(time) {
    if(time == " ") {
        time = 0
    }
    time = Math.floor(time)
    return time
}

function checkArray(array, string) {
    if (array.length > 1 && string == "studio") {
        textStudio.value = "Студії:"
    }
    if (array.length > 1 && string == "country") {
        textCountry.value = "Країни:"
    }
    if (array.length > 1 && string == "director") {
        textDirector.value = "Режисери:"
    }
    if (array.length > 1 && string == "language") {
        textLanguage.value = "Мови:"
    }
    if (array.length > 1 && string == "genre") {
        textGenre.value = "Жанри:"
    }
    return array
}

const model = filmModel();

console.log(model.film)
</script>

<style lang="scss" scoped>
.film-screen__description {
    &-item {
        font-size: 27px;
        font-family: "Arial";
        padding-top: 0.75rem;
        font-weight: 100;
        color: #d0d0d0;

        display: flex;
        flex-direction: row;

        &_orange {
            color: #f39c42;

            margin-right: 0.5rem
        }
    }
}</style>