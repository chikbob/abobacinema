<template>
    <nav :class="cnHeader('nav')">
        <Link :class="cnHeader('nav-item')" href="/sessions">Сеанси</Link>
        <Link :class="cnHeader('nav-item')" href="/soon">Скоро у прокаті</Link>
        <Link :class="cnHeader('nav-item')" href="/contacts">Контакти</Link>
    </nav>
    <div :class="cnHeader('orangeLine')" style="margin-bottom: 1.8rem"></div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { cnHeader } from './header.const';
</script>

<style lang="scss" scoped>
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

        font-family: "Arial";
        text-align: center;
        color: #d0d0d0;
        min-width: fit-content;

        font-size: 1.5rem;
    }
}

.header__orangeLine {
  border-top: 2px solid #f39c42;
  position: static;
}
</style>