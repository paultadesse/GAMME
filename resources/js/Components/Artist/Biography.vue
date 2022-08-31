<template>
  <div class="border-l p-8 bg-white">
    <p
      class="
        animate__animated animate__fadeInUp
        max-w-3xl
        text-gray-600
        tracking-wider
        first-letter:text-4xl
        font-light
        leading-relaxed
        text-justify
      "
      v-html="bio"
    >
      
    </p>
  </div>
</template>

<script setup>
import { computed, defineProps } from 'vue';

const props = defineProps({
  biography: String
})

const bio = computed(() => {
  return props.biography
})
</script>