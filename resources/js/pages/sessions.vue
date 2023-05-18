<template>
    <PageLayout>
        <div class="content">
            <div v-for="film in film.data" :key="film.id" class="movie">
                <Link :href="`/films/{id}`">
                <img :src="film.poster" alt="image_poster">
                </Link>
                <p class="name__style">{{ film.name }}</p>
                <p class="name__style" style="color: #d0d0d0; margin: 0 0 20px;">{{ film.release_start_at }}</p>
            </div>
        </div>
        <Pagination :links="film.links"/>
    </PageLayout>
</template>

<script setup>
import PageLayout from '@/shared/layouts/page-layout/page-layout.vue';
import Pagination from '@/shared/components/pagination/pagination.vue'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    film: Array,
})
</script>

<style lang="scss" scoped>
.content {
    display: flex;
    flex-flow: row wrap;
    flex-direction: row;
    justify-content: flex-start;
    margin-bottom: 50px;
    width: 100%;
}

.movie {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    width: 20%;
}

@media (max-width: 1250px) {
    .movie {
        width: 20%;
    }
}

.movie img {
    margin-left: auto;
    margin-right: auto;
    display: block;
    width: 65%;
    border: 2px solid #f39c42;
}

.name__style {
    font-family: "Arial";
    font-size: 1.5rem;
    color: #f39c42;
    width: 100%;
    text-align: center;
    margin: 20px 0;
}
</style>