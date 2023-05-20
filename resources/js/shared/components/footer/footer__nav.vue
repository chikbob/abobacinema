<template>
    <div :class="cnFooter('orangeLine')" style="margin-top: 14rem">
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
                        Львівська область, Украина, 79000</div>
                    <div :class="cnFooter('info__container-text')">Працює кожного дня з 10:00 до 18:00</div>
                </div>
                <div :class="cnFooter('info__container')">
                    <div :class="cnFooter('info__container-textException')">© 2023 Кінотеатр «AbobaCinema»</div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { cnFooter } from './footer.const';
</script>

<style lang="scss" scoped>
.footer__orangeLine {
    border-top: 2px solid #f39c42;
    position: static;
}

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

            font-family: "Arial";
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
        font-family: "Arial";
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
</style>