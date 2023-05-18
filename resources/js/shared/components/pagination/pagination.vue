<template>
    <nav class="pagination__list">
        <div class="pagination__list-container" v-if="links.length > 3">
            <Link class="pagination__list-item" 
            v-for="(link, k) in links" 
            v-html="link.label"
            :disabled="link.url === null"
            :class="{ link__active: link.active, link__disabled : link.url === null}"
            :key="k"
            :href="link.url"/>
        </div>
        <div>{{ links.active }}</div>
    </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
const props = defineProps({
    links: Array,
})
</script>

<style lang="scss" scoped>
.pagination__list {
    display: flex;
    justify-content: center; 

    margin: 3rem 0;

    &-item {
        margin: 0 1rem;
        font-family: "Arial";
        font-size: 1.5rem;
        color: #d0d0d0;
        width: 100%;
        text-align: center;
        text-decoration: none;
    }
}

.link {
    &__active {
        color:#f39c42;
    }
    &__disabled {
        color:#8b8b8b;
    }
}
</style>