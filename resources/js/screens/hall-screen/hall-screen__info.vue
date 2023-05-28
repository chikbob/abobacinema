<template>
    <PageLayout>
        <div :class="cnHallScreen('info')">
            <div :class="cnHallScreen('info-image')">
                <img :src="filmImage" :alt="filmImage" />
            </div>
            <div :class="cnHallScreen('info-text')">
                {{ "Назва фільму: " + filmName }}
            </div>
            <div :class="cnHallScreen('info-text')">
                {{ "Час початку сеансу: " + filmTime }}
            </div>
            <div :class="cnHallScreen('info-text')">
                {{ "Тривалість фільму: " + checkNull(filmDuration) }}
            </div>
            <div :class="cnHallScreen('info-text')">
                {{ "Зал: " + hallName }}
            </div>
            <div :class="cnHallScreen('info-hall')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 1">
                        <div :class="cnHallScreen('info-hall-block')">
                            <div :class="cnHallScreen('info-cell')">
                                <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                    <CustomTooltip
                                        :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                        <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                            item[1]
                                        }}
                                        </div>
                                        <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                            item[1]
                                        }}
                                        </div>
                                    </CustomTooltip>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 2">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 3">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 4">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 5">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 6">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 7">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 8">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 9">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 10">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 11">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 12">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 13">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 14">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="cnHallScreen('info-hall_next')">
                <div v-for="item in mergeArrayHallGenerator" :key="mergeArrayHallGenerator.indexOf(item)">
                    <div v-if="item[0] == 15">

                        <div :class="cnHallScreen('info-cell')">
                            <div v-for="cell in item[3].toString()" :key="item[3].toString().indexOf(cell)">
                                <CustomTooltip
                                    :label="'Ряд: ' + item[0] + `\n` + 'Місце: ' + item[1] + `\n` + 'Вартість: ' + item[2]">
                                    <div @click="item[3] = 0" v-if="cell == 1" :class="cnHallScreen('info-cell_buy')">{{
                                        item[1]
                                    }}
                                    </div>
                                    <div @click="item[3] = 1" v-else :class="cnHallScreen('info-cell_busy')">{{
                                        item[1]
                                    }}
                                    </div>
                                </CustomTooltip>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </PageLayout>
</template>

<script setup>
import { ref } from 'vue'
import PageLayout from "@/shared/layouts/page-layout/page-layout.vue";
import { cnHallScreen } from "./hall-screen.const.js";
import { hallModel } from "./hall-screen.model.js";
import { filmModel } from "@/screens/film-screen/film-screen.model.js";

import CustomTooltip from '@adamdehaven/vue-custom-tooltip'

const modelHall = hallModel();
const modelFilm = filmModel();

const film = modelFilm.film.films
const sessions = modelFilm.film.sessionsALL

const halls = modelFilm.film.hallInfo
const hallNames = modelFilm.film.hallGeneratoInfo

let hallName = ref()
let mergeFilm = ref([])
let arrayHallGenerator = ref([])
let mergeArrayHallGenerator = ref([])


for (let indexSession = 0; indexSession < sessions.length; ++indexSession) {
    const valueSession = sessions[indexSession]
    if (valueSession.id == modelHall.hall.session_id) {
        for (let indexFilm = 0; indexFilm < film.length; ++indexFilm) {
            const valueFilm = film[indexFilm]
            if (valueSession.film_id == valueFilm.id) {
                mergeFilm = [(valueSession.time).toString(), valueFilm.name, valueFilm.poster, valueFilm.duration, valueFilm.age]
                for (let indexHall = 0; indexHall < halls.length; ++indexHall) {
                    const valueHall = halls[indexHall]
                    if (valueHall.session_id == valueSession.id) {
                        for (let indexHallGenerator = 0; indexHallGenerator < hallNames.length; ++indexHallGenerator) {
                            const valueHallGenerator = hallNames[indexHallGenerator]
                            if (valueHall.hall_generator_id == valueHallGenerator.id) {
                                hallName = valueHallGenerator.name
                                arrayHallGenerator = [valueHallGenerator.row, valueHallGenerator.seat, valueHallGenerator.price, valueHallGenerator.purchased]
                                mergeArrayHallGenerator.value.push(arrayHallGenerator)
                            }
                        }
                    }
                }
            }
        }
    }
}

let filmDuration = mergeFilm[3]
let filmImage = mergeFilm[2]
let filmName = mergeFilm[1]
let filmTime = mergeFilm[0]

function checkNull(time) {
    time = time.toString().replace(/(\d{1,2})(\d{2})$/, "$1:$2");
    return time
}
</script>

<style lang="scss" scoped>
.hall-screen__info {
    &-hall {
        display: flex;
        justify-content: center;
        flex-direction: row;

        margin-top: 10rem;

        &_next {
            display: flex;
            justify-content: center;
            flex-direction: row;
        }

        &-block {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        &_array {
            display: flex;
            flex-direction: row;
        }
    }

    &-cell {
        &-secondRow {
            display: flex;
        }

        &_buy {
            width: 1rem;
            height: 2rem;
            border: 1px #f39c42 solid;
            background-color: #e98c29;
            margin: 10px;

            font-size: 15px;
            font-family: "Arial";
            font-weight: bold;
            color: #292929;

            display: flex;
            align-items: center;
            justify-content: center;

            &::selection {
                background: transparent;
            }

            &::-moz-selection {
                background: transparent;
            }
        }

        &_busy {
            width: 1rem;
            height: 2rem;
            border: 1px #707070 solid;
            background-color: #1d1d1d;
            margin: 10px;

            font-size: 15px;
            font-family: "Arial";
            font-weight: bold;
            color: #d0d0d0;

            display: flex;
            align-items: center;
            justify-content: center;

            &::selection {
                background: transparent;
            }

            &::-moz-selection {
                background: transparent;
            }
        }
    }

    &-image img {
        width: 200px;
        height: 300px;
        float: left;
        border: 2px solid #f39c42;
        margin: 2rem 6rem 0;
    }

    &-text {
        font-size: 27px;
        font-family: "Arial";
        padding-top: 40px;
        font-weight: 400;
        color: #d0d0d0;
    }
}
</style>