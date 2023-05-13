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
.header {
    position: relative;
}
</style>
