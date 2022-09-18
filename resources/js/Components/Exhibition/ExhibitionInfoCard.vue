<template>
  <Link :href="route('exhibitions.show', { exhibition: exhibition })">
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
        class="absolute h-full w-full object-cover p-4"
        src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Afewerk_Tekle_1965.jpg"
        alt=""
        srcset=""
      />
    </div>
    <div
      class="
        px-2
        py-1
        text-sm
        tracking-widest
        font-light
        uppercase
        animate__animated animate__fadeIn
      "
    >
      <div class="text-center">
        <h1 class="">{{ exhibition.title }}</h1>
        <!-- <span>B. {{ artist.date_of_birth }}</span> -->
      </div>
    </div>
    <!-- <hr class="py-2" /> -->
    <div class="flex justify-center items-center py-2">
      <p class="uppercase text-xs text-gray-500 tracking-widest">
        {{ exhibition.starting_date }}
      </p>
      <p class="text-sm">&nbsp; - &nbsp;</p>
      <p class="uppercase text-xs text-gray-500 tracking-widest">
        {{ exhibition.end_date }}
      </p>
    </div>
    <p class="uppercase text-xs text-gray-500 tracking-widest px-4 pt-2">
      featured artists
    </p>
    <div class="flex items-center -space-x-3 overflow-hidden px-4 py-2">
      <div v-for="featured_artist in exhibition.artists" :key="featured_artist">
        <img
          v-if="featured_artist.photo == ''"
          src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Afewerk_Tekle_1965.jpg"
          :alt="featured_artist.slug"
          class="
            rounded-full
            w-16
            h-16
            object-cover
            border-4 border-white
            animate__animated animate__fadeInLeft
          "
        />
        <img
          v-else
          class="
            rounded-full
            w-16
            h-16
            object-cover
            border-4 border-white
            animate__animated animate__fadeInLeft
          "
          :src="'/storage/' + featured_artist.photo"
          alt=""
        />
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
  exhibition: Object,
});

const exhibition = computed(() => {
  return props.exhibition;
});
</script>