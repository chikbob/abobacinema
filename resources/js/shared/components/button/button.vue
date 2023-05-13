<template>
    <Component
        v-bind="bindProps"
        :is="isComponent"
        :class="cnButton('hfhfh', {
            active: model.book.active
        })"
    >
        <slot/>
    </Component>
</template>

<script setup>
import {cnButton} from "./button.const.js";
import {Link} from "@inertiajs/vue3";
import {computed} from "vue";

const props = defineProps({
    type: {
        type: String,
        default: 'button'
    },
    external: Boolean,
    target: String,
    href: String
})

const bindProps = computed(() => {
    if (props.type === 'link') {
        return {
            href: props.href,
            external: props.external
        }
    }

    return {
        type: props.type
    }
});

const isComponent = computed(() => {
    if (props.type === 'link') {
        return props.external ? 'a' : Link;
    }

    return 'button';
})
</script>

<style lang="scss">
.button {

}
</style>
