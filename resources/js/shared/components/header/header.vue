<template>
    <header :class="cnHeader()">
        <HeaderLogo/>
        <HeaderNav/>
    </header>
</template>

<script setup>
import {cnHeader} from "./header.const.js";
import HeaderLogo from './header__logo.vue';
import HeaderNav from './header__nav.vue';
</script>

<style lang="scss">
@import "scss/attributes";

.header {
    display: flex;
    justify-content: space-around;

    margin: 0 0 3rem;

    border-bottom: 2px solid #f39c42;
}

@media (max-width: $breakpoint_xxl) {
    .header {
        margin: 0 0 3.6rem;
    }
}

@media (max-width: $breakpoint_xl) {
    .header {
        margin: 0 0 4.2rem;
    }
}

@media (max-width: $breakpoint_l) {
    .header {
        margin: 0 0 4.8rem;
    }
}

@media (max-width: $breakpoint_m) {
    .header {
        margin: 0 0 5.2rem;
    }
}

@media (max-width: $breakpoint_s) {
    .header {
        margin: 0 0 8rem;
    }
}
</style>
