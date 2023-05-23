<template>
    <PageLayout>
        <div :class="cnHallScreen('info')">
            <div :class="cnHallScreen('info-image')">
                {{ model.hall }}
            </div>
        </div>
    </PageLayout>
</template>

<script setup>
import { ref } from 'vue'
import PageLayout from "@/shared/layouts/page-layout/page-layout.vue";
import { cnHallScreen } from "./hall-screen.const.js";
import { hallModel } from "./hall-screen.model.js";

const model = hallModel();

console.log(model.hall)
</script>

<style lang="scss" scoped></style>