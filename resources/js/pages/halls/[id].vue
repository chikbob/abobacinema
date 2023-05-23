<template>
    <HallScreen/>
</template>

<script setup>
import HallScreen from "@/screens/hall-screen/hall-screen.vue";
import {hallModel} from "@/screens/hall-screen/hall-screen.model.js";

const props = defineProps({
    hall: Object
});

const model = hallModel();
model.init(props.hall.data);
</script>

<style lang="scss" scoped>

</style>