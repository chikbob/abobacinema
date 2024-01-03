<template>
    <nav :class="cnFooter('nav')">

        <div :class="cnFooter('nav__container')">
            <Link :class="cnFooter('nav__container-textHigh')" href="/sessions">Сеанси</Link>
            <Link :class="cnFooter('nav__container-textHigh')" href="/soon">Скоро у прокаті</Link>
            <Link :class="cnFooter('nav__container-textHigh')" href="/contacts">Контакти</Link>
        </div>
        <div :class="cnFooter('info')">
            <div :class="cnFooter('info__container')">
                <div :class="cnFooter('info__container-textHigh')">Каса: (099) 123-4567</div>
                <div :class="cnFooter('info__container-textHigh')">abobacinemahelp@gmail.com</div>
                <div :class="cnFooter('info__container-textHigh')">Служба підтримки: (099) 765-43-21</div>
            </div>
            <div :class="cnFooter('info__container')">
                <div :class="cnFooter('info__container-text')">Ми відкриті кожного дня з 10:00 до 22:00</div>
                <div :class="cnFooter('info__container-text')">ТРЦ "Forum Lviv", вулиця Під Дубом,<br> 7Б, Львів,
                    Львівська область, Украина, 79000
                </div>
                <div :class="cnFooter('info__container-text')">Працює кожного дня з 10:00 до 18:00</div>
            </div>
            <div :class="cnFooter('info__container')">
                <div :class="cnFooter('info__container-textException')">© 2023 Кінотеатр «AbobaCinema»</div>
            </div>
        </div>
    </nav>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import {cnFooter} from './footer.const';
</script>

<style lang="scss" scoped>
@import "scss/attributes";

.footer__nav {
    background-color: #252525;
    width: 100%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

    &__container {
        flex-direction: row;
        margin: 2.3rem 0;
        width: 100%;

        &-textHigh {
            color: #f39c42;
            margin: 2rem 1rem;

            text-decoration: none;

            font-family: "Arial", serif;
            text-align: center;
            min-width: fit-content;

            font-size: 1.5rem;
        }
    }
}

.footer__info {
    display: flex;
    justify-content: center;
    flex-direction: column;
    width: 100%;

    &__container {
        font-family: "Arial", serif;
        width: 100%;
        text-align: center;
        color: #d0d0d0;
        display: flex;
        justify-content: space-around;
        flex-direction: row;

        margin-bottom: 1rem;

        &-text {
            font-size: 1rem;

            width: 350px;
        }

        &-textHigh {
            font-size: 1.5rem;

            width: 550px;
        }

        &-textException {
            margin: 2rem 0 1rem;
        }
    }
}

@media (max-width: $breakpoint_xxl) {
    .footer__nav {
        &__container {
            margin: 2.3rem 0;

            &-textHigh {
                font-size: 1.5rem;
            }
        }
    }
    .footer__info {
        &__container {
            &-text {
                font-size: 1rem;

            }

            &-textHigh {
                font-size: 1.5rem;

            }

            &-textException {
                margin: 2rem 0 1rem;
            }
        }
    }
}

@media (max-width: $breakpoint_xl) {
    .footer__nav {
        &__container {
            margin: 2rem 0;

            &-textHigh {
                font-size: 1.4rem;
            }
        }
    }
    .footer__info {
        &__container {

            &-text {
                font-size: .7rem;
                width: 300px;
            }

            &-textHigh {
                font-size: 1.15rem;
                width: 300px;
            }

            &-textException {
                font-size: .7rem;
                margin: 2rem 0 1rem;
            }
        }
    }
}

@media (max-width: $breakpoint_l) {
    .footer__nav {
        &__container {
            margin: 1.7rem 0;

            &-textHigh {
                font-size: 1.3rem;
            }
        }
    }
    .footer__info {
        &__container {
            &-text {
                font-size: .6rem;
                width: 300px;
            }

            &-textHigh {
                font-size: 1rem;
                width: 300px;
            }

            &-textException {
                font-size: .6rem;
                margin: 1rem 0 0;
            }
        }
    }
}

@media (max-width: $breakpoint_m) {
    .footer__nav {
        &__container {
            margin: 1.6rem 0;

            &-textHigh {
                font-size: 1rem;
            }
        }
    }
    .footer__info {
        &__container {
            &-text {
                font-size: .5rem;
                width: 300px;
            }

            &-textHigh {
                font-size: .8rem;
                width: 300px;
            }

            &-textException {
                font-size: .5rem;
                margin: .8rem 0 0;
            }
        }
    }
}

@media (max-width: $breakpoint_s) {
    .footer__nav {
        &__container {
            margin: 1.6rem 0;

            &-textHigh {
                font-size: 1rem;
            }
        }
    }
    .footer__info {
        &__container {
            &-text {
                font-size: .35rem;
                width: 300px;
            }

            &-textHigh {
                font-size: .7rem;
                width: 300px;
            }

            &-textException {
                font-size: .35rem;
                margin: .4rem 0;
            }
        }
    }
}
</style>
