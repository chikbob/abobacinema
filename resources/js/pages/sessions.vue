<template>
    <PageLayout>
        <div class="content">
            <div v-for="film in releasedFilms" :key="film.id" class="movie">
                <Link :href="`/films/${film.id}`">
                <img :src="film.poster" alt="image_poster">
                </Link>
                <p class="name__style">{{ film.name }}</p>
                <p class="name__style" style="color: #d0d0d0; margin: 0 0 20px;">{{ film.release_start_at }}</p>
            </div>
        </div>
        <Pagination :links="film.links" />
    </PageLayout>
</template>

<script setup>
import { ref, reactive, watch } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import PageLayout from '@/shared/layouts/page-layout/page-layout.vue';
import Pagination from '@/shared/components/pagination/pagination.vue'
import { Link } from '@inertiajs/vue3'

let releasedFilms = ref(props.film.data)

const props = defineProps({
    film: Array,
})

const form = reactive({
    released: false,
})
watch(form, () => {
    submit()
}, {
    deep: true
})

function submit() {
    Inertia.get('/sessions', form)
}

</script>

<style lang="scss" scoped>
.content {
    display: flex;
    flex-flow: row wrap;
    flex-direction: row;
    justify-content: flex-start;
    width: 100%;
}

.movie {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-direction: column;
    width: 25%;
}

@media (max-width: 1250px) {
    .movie {
        width: 25%;
    }
}

.movie img {
    margin-left: auto;
    margin-right: auto;
    display: block;
    border: 2px solid #f39c42;

    width: 200px;
    height: 260px;
}

.name__style {
    font-family: "Arial";
    font-size: 1.5rem;
    color: #f39c42;
    width: 100%;
    height: 55px;
    text-align: center;
    margin: 15px auto 10px;

    display: flex;
    justify-content: center;
    align-items: center;
}
</style>