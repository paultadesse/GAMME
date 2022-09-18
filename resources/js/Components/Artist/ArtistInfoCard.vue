<template>
  <Link :href="route('artists.show', { artist: artist })">
    <div
      class="
        relative
        pb-full
        bg-white
        xs:h-auto xs:square
        animate__animated animate__fadeIn animate_delay-2s
      "
    >
      <img
        v-if="artist.photo == ''"
        class="absolute h-full w-full object-cover p-4"
        src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Afewerk_Tekle_1965.jpg"
        alt="artist photo"
        srcset=""
      />
      <img
        v-else
        class="absolute h-full w-full object-cover p-4"
        :src="'/storage/' + artist.photo"
        :alt="artist.first_name"
      />
    </div>
    <div
      class="
        p-12
        py-1
        text-sm
        tracking-widest
        font-light
        uppercase
        animate__animated animate__fadeInLeft
      "
    >
      <div class="text-center">
        <h1 class="font-bold">{{ artist.first_name }}</h1>
        <span>B. {{ artist.date_of_birth }}</span>
      </div>
    </div>
  </Link>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { DateTime } from "luxon";
import { defineProps, computed } from "vue";

const route = computed(() => {
  return window.route;
});

const props = defineProps({
  artist: Object,
});

const artist = computed(() => {
  return props.artist;
});
</script>