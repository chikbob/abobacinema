<template>
    <Link :class="cnHeader('logo')" href="/">
    <img :class="cnHeader('logo')" src="@/assets/main-logo.png">
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { cnHeader } from "@/shared/components/header/header.const.js";
</script>

<style lang="scss">
.header__logo {
    position: absolute;

    width: 13rem;
    height: 5.25rem;

    margin-top: 0.25rem;
}
</style>
