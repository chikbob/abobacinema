<template>
    <div :class="cnFilmScreen('description')">
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">Вік:</div>{{ model.film.age }}+
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">{{ textDirector }}</div>{{
                directors.toString() }}
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">Рік виходу:</div>{{ model.film.year }}
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">{{ textLanguage }}</div>{{
                languages.toString() }}
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">{{ textGenre }}</div>{{ genres.toString() }}
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">Тривалість:</div>{{ checkNull(model.film.duration) }}
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">{{ textCountry }}</div>{{
                countries.toString() }}
        </div>
        <div :class="cnFilmScreen('description-item')">
            <div :class="cnFilmScreen('description-item_orange')">{{ textStudio }}</div>{{ studios.toString() }}
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { cnFilmScreen } from "./film-screen.const.js";
import { filmModel } from "./film-screen.model.js";
const model = filmModel();

let studios = model.film.studios.join(', ')
let directors = model.film.directors.join(', ')
let languages = model.film.languages.join(', ')
let genres = model.film.genres.join(', ')
let countries = model.film.countries.join(', ')

let textStudio = ref("Студія:")
let textCountry = ref("Країна:")
let textDirector = ref("Режисер:")
let textLanguage = ref("Мова:")
let textGenre = ref("Жанр:")

function checkNull(time) {
    time = time.toString().replace(/(\d{1,2})(\d{2})$/, "$1:$2");
    return time
}
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
}
</style>