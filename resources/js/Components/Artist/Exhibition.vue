<template>
  <div class="grid grid-cols-4 xl:grid-cols-12 gap-2 xl:gap-4 bg-white">
    <Link
      :href="
        route('artists.exhibitions.show', {
          artist: artist,
          exhibition: exhibition,
        })
      "
      class="
        col-span-4
        md:col-span-2
        xl:col-span-4
        bg-white
        shadow-2xl
        hover:scale-125 hover:z-20
        transition
        ease-in
        delay-100
      "
      v-for="exhibition in artist.exhibitions"
      :key="exhibition.id"
    >
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
          v-if="exhibition.cover_image == ''"
          class="absolute h-full w-full object-cover p-4"
          src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Afewerk_Tekle_1965.jpg"
          alt="artist photo"
          srcset=""
        />
        <img
          v-else
          class="absolute h-full w-full object-cover p-4"
          :src="'/storage/' + exhibition.cover_image"
          :alt="exhibition.title"
        />
      </div>
      <div
        class="
          p-12
          py-2
          text-sm
          tracking-widest
          animate__animated animate__fadeInLeft
        "
      >
        <div class="text-center w-48">
          <h1 class="truncate first-letter:uppercase">{{ exhibition.title }}</h1>
        </div>
      </div>
    </Link>
  </div>
</template>

<script setup>
import { computed, defineProps } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

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