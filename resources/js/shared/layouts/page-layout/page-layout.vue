<template>
    <Header />
    <slot/>
    <Footer />
</template>

<script setup>
import Header from "@/shared/components/header/header.vue";
import Footer from "@/shared/components/footer/footer.vue";
</script>

<style scoped>
</style>
