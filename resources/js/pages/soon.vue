<template>
    <PageLayout>
        <div class="content">
            <div v-for="film in films" :key="film.id" class="movie">
                <Link :href="`/films/${film.id}`">
                <img class="image" :src="film.poster" alt="image_poster">
                </Link>
                <p class="name__style">{{ film.name }}</p>
            </div>
        </div>
        <!-- <input type="checkbox" v-model="form.released" /> -->
        <Pagination :links="soon.links" />
    </PageLayout>
</template>

<script setup>
import { ref, reactive, watch } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import PageLayout from '@/shared/layouts/page-layout/page-layout.vue';
import Pagination from '@/shared/components/pagination/pagination.vue'
import { Link } from '@inertiajs/vue3'

let films = ref(props.soon.data)

const props = defineProps({
    soon: Array,
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
    Inertia.get('/soon', form)
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
        width: 20%;
    }
}

.movie img {
    margin-left: auto;
    margin-right: auto;
    display: block;
    border: 2px solid #f39c42;

    width: 200px;
    height: 300px;
}

.name__style {
    font-family: "Arial";
    font-size: 1.5rem;
    color: #f39c42;
    width: 100%;
    height: 55px;
    text-align: center;
    margin: 20px auto 20px;

    display: flex;
    justify-content: center;
    align-items: center;
}
</style>