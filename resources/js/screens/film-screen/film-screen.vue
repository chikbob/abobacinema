<template>
    <PageLayout>
        <FilmScreenPreview></FilmScreenPreview>
        <FilmScreenDescription></FilmScreenDescription>
        <FilmScreenDepiction></FilmScreenDepiction>
    </PageLayout>
</template>

<script setup>
import PageLayout from "@/shared/layouts/page-layout/page-layout.vue";
import FilmScreenPreview from "./film-screen__preview.vue"
import FilmScreenDepiction from "./film-screen__depiction.vue"
import FilmScreenDescription from "./film-screen__description.vue"
import { cnFilmScreen } from "./film-screen.const.js";
</script>

<style lang="scss" scoped>

</style>