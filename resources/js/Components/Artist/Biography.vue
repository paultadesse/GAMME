<template>
  <div class="border-l p-8">
    <p
      class="
        animate__animated animate__fadeInUp
        max-w-3xl
        text-gray-900
        tracking-wider
        first-letter:text-4xl
        font-light
        leading-relaxed
        text-justify
      "
    >
      {{ bio }}
    </p>
  </div>
</template>

<script setup>
import { computed, defineProps } from "vue";

const props = defineProps({
  biography: String,
});

const bio = computed(() => {
  return props.biography;
});
</script>