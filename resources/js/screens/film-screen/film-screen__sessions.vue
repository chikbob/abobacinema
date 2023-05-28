<template>
    <div :class="cnFilmScreen('sessions')">
        <div v-if="model.film.released == 1">
            <div :class="cnFilmScreen('sessions-title')">
                Розклад сеансів
            </div>
            <div :class="cnFilmScreen('sessions_block')">
                <div v-for="session in sessionsArray" :key="session.id">
                    <div v-for="hall in session.halls" :key="hall.id">
                        <div v-if="hall.session_id == session.id">
                            <Link :class="cnFilmScreen('sessions_block-time')" :href="`/halls/${hall.session_id}`">
                            {{ session.times.toString() }}
                            </Link>
                        </div>
                        <div v-else>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-else>
            <div :class="cnFilmScreen('sessions_block-title')">Скоро!</div>
        </div>
    </div>
</template>

<script setup>
import { ref, defineProps } from 'vue'
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

        &-title {
            display: flex;
            justify-content: center;

            font-size: 27px;
            font-family: "Arial";

            font-weight: bold;
            color: #f39c42;

            flex-direction: row;
            text-decoration: none;

            margin: 2rem 0.5rem 0;
        }
    }
}
</style>