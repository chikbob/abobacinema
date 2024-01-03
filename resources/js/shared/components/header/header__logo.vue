<template>
    <Link :class="cnHeader('logo')" href="/">
        <img :class="cnHeader('logo')" src="@/assets/main-logo.png">
    </Link>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import {cnHeader} from "@/shared/components/header/header.const.js";
</script>

<style lang="scss">
@import "scss/attributes";
.header {
    &__logo {
        width: 13rem;
        height: 5.25rem;

        margin-top: 0.25rem;
    }
}

@media (max-width: $breakpoint_xxl) {
    .header {
        &__logo {
            width: 13rem;
            height: 5.25rem;
        }
    }

}

@media (max-width: $breakpoint_xl) {
    .header {
        &__logo {
            width: 12rem;
            height: 5rem;

            margin-top: 0.35rem;
        }
    }
}

@media (max-width: $breakpoint_l) {
    .header {
        &__logo {
            width: 11rem;
            height: 4.7rem;

            margin-top: 0.4rem;
        }
    }
}

@media (max-width: $breakpoint_m) {
    .header {
        &__logo {
            width: 10rem;
            height: 4.3rem;

            margin-top: 0.5rem;
        }
    }
}

@media (max-width: $breakpoint_s) {
    .header {
        &__logo {
            width: 9rem;
            height: 4rem;

            margin-top: 0.65rem;
        }
    }
}
</style>
