<template>
    <div :class="cnFilmScreen('sessions')">
        <div :class="cnFilmScreen('sessions-title')">
            Розклад сеансів
        </div>
        <div :class="cnFilmScreen('sessions_block')">
            <div v-for="session in sessionsArray" :key="session.id">
                <Link :class="cnFilmScreen('sessions_block-time')" :href="`/halls/${session.halls}`">
                {{ session.times.toString() }}
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import { cnFilmScreen } from "./film-screen.const.js";
import { filmModel } from "./film-screen.model.js";
import { Link } from '@inertiajs/vue3'

const model = filmModel();
let sessionsArray = ref(model.film.sessions)


</script>

<style lang="scss" scoped>
.film-screen__sessions {
    display: flex;
    justify-content: center;
    flex-direction: column;

    &-title {
        display: flex;
        justify-content: center;

        font-size: 27px;
        font-family: "Arial";
        margin-top: 2rem;
        font-weight: bold;
        color: #f39c42;
    }

    &_block {
        display: flex;
        flex-direction: row;
        justify-content: center;

        margin-top: 2rem;
        &-time {
            display: flex;
            justify-content: center;

            font-size: 27px;
            font-family: "Arial";
            
            font-weight: bold;
            color: #d0d0d0;

            flex-direction: row;
            text-decoration: none;

            margin: 0 0.5rem;
        }
    }
}
</style>