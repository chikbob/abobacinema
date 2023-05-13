<template>
    <PageLayout>
        <VueperSlides 
      class="slideshow" 
      fade 
      :touchable="false" 
      :autoplay="true"
      transition-speed="400" 
      fixed-height="450px">
        <VueperSlide 
        v-for="(slide, i) in slides"
        :key="i"
        :image="slide.image"
        :style="'background-color: ' + '#f39c42'"
        />
      </VueperSlides>

      <div class="text__main">«Я знімаюся у безлічі фільмів для дітей, тому що хочу дарувати їм позитив. По
        телевізору показують відірвані руки і ноги через теракти і війни, а дітям потрібні любов і щастя. Коли
        виростаєш, світ обламує тебе. Чудо, що ми ще можемо посміхатися»</div>
      <div class="blacked">- Джонні Депп</div>
    </PageLayout>
</template>

<script setup>
import image1 from '@/assets/slideshow(5).jpg'
import image2 from '@/assets/slideshow(6).jpg'
import image3 from '@/assets/slideshow(4).jpg'
import image4 from '@/assets/slideshow(7).jpg'
import PageLayout from '@/shared/layouts/page-layout/page-layout.vue';
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'

const slides = [
  {
    image: image1
  },
  {
    image: image2
  },
  {
    image: image3
  },
  {
    image: image4
  },
]
</script>

<style lang="scss">
body {
    margin: 0;
    border: 0;
    background:#383838;
}

.slideshow {
  border: 2px solid #f39c42;
  width: 75rem;
  margin: auto;
  margin-bottom: 2.5rem !important;
}

.text__main,
.blacked {
    font-family: "Arial";
    font-size: 1.5rem;
    display: flex;
    margin-left: 10%;
    margin-right: 10%;
    justify-content: center;
    color: #d0d0d0;
}
.blacked {
    font-style: italic;
    color: #7d7d7d;
    margin-top: 1.5rem;
}

::-webkit-scrollbar {
  width: 10px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: #888;
}

::-webkit-scrollbar-thumb:hover {
  background: #555;
}

.vueperslides__bullet .default {
  background-color: #383838;
  border: none;
  box-shadow: none;
  transition: 0.3s;
  width: 1rem;
  height: 1rem;
}

.vueperslides__arrow {
  color: #f39c42
}

.vueperslides__bullet--active .default {
  background-color: #f39c42;
}
</style>