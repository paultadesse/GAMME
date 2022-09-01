<template>
  <div class="grid grid-cols-4  xl:grid-cols-12 gap-4 bg-white px-4">
    <Link :href="route('artists.exhibitions.show', {artist: artist, exhibition: exhibition })" class="col-span-2 xl:col-span-3 bg-white shadow-2xl hover:scale-125 hover:z-20 transition ease-in delay-100" v-for="exhibition in artist.exhibitions" :key="exhibition.id">
      <div
        class="
          relative
          pb-full
          bg-gray-500
          xs:h-auto xs:square
        animate__animated animate__fadeIn animate_delay-2s
        "
      >
        <img
          class="absolute h-full w-full object-cover"
          src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Afewerk_Tekle_1965.jpg"
          alt=""
          srcset=""
        />
      </div>
      <div
        class="p-12
          py-1
          text-sm
          tracking-widest
          font-light
          uppercase
          animate__animated animate__fadeInLeft
        "
      >
        <div class="text-center py-2">
          <h1 class="truncate"> {{ exhibition.title }}</h1>
          <!-- <span>some desc ... </span> -->
        </div>
      </div>
    </Link>
  </div>
</template>

<script setup>
import { computed, defineProps } from 'vue';
import { Link } from '@inertiajs/inertia-vue3'

const route = computed(() => { return window.route })

const props = defineProps({
  artist: Object,
})

const artist = computed(() => {
  return props.artist
})
</script>