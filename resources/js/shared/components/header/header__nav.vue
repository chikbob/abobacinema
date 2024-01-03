<template>
    <nav :class="cnHeader('nav')">
        <Link :class="cnHeader('nav-item')" href="/sessions">Сеанси</Link>
        <Link :class="cnHeader('nav-item')" href="/soon">Скоро у прокаті</Link>
        <Link :class="cnHeader('nav-item')" href="/contacts">Контакти</Link>
    </nav>
    <div :class="cnHeader('orangeLine')" style=""></div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import {cnHeader} from './header.const';
</script>

<style lang="scss" scoped>
@import "scss/attributes";

.header__nav {
    background-color: #383838;
    width: 100%;
    height: 100px;
    text-align: center;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    flex-direction: row;

    &-item {
        margin-left: 1rem;
        margin-right: 1rem;

        text-decoration: none;

        font-family: "Arial", serif;
        text-align: center;
        color: #d0d0d0;
        min-width: fit-content;

        font-size: 1.5rem;
    }
}

@media (max-width: $breakpoint_xxl) {
    .header {
        &__nav {
            &-item {
                font-size: 1.5rem;
            }
        }
    }
}

@media (max-width: $breakpoint_xl) {
    .header {
        &__nav {
            &-item {
                font-size: 1.4rem;
            }
        }
    }
}

@media (max-width: $breakpoint_l) {
    .header {
        &__nav {
            &-item {
                font-size: 1.3rem;
            }
        }
    }
}

@media (max-width: $breakpoint_m) {
    .header {
        &__nav {
            &-item {
                font-size: 1.2rem;
            }
        }
    }
}

@media (max-width: $breakpoint_s) {
    .header {
        &__nav {
            &-item {
                font-size: 1rem;
            }
        }
    }
}

@media (max-width: $breakpoint_xs) {
    .header {
        &__nav {
            &-item {
                font-size: .8rem;
            }
        }
    }
}
</style>
