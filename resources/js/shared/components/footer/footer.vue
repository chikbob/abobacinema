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
@import "scss/attributes";

.footer {
    position: static;

    border-top: 2px solid #f39c42;

    margin: 4rem 0 0 0;
}

@media (max-width: $breakpoint_xxl) {

}

@media (max-width: $breakpoint_xl) {

}

@media (max-width: $breakpoint_l) {
    .footer {
        margin: 6.5rem 0 0 0;
    }
}

@media (max-width: $breakpoint_m) {
    .footer {
        margin: 7rem 0 0 0;
    }
}

@media (max-width: $breakpoint_s) {
    .footer {
        margin: 8rem 0 0 0;
    }
}
</style>
