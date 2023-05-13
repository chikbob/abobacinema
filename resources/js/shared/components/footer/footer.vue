<template>
    <footer :class="cnFooter()">
        <FooterNav/>
    </footer>
</template>

<script setup>
import {cnFooter} from "./footer.const.js";
import FooterNav from './footer__nav.vue';
</script>

<style lang="scss">
.footer {
    position: relative;
}
</style>