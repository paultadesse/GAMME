<template>
  <div class="pt-48 pb-12 xl:px-12 min-h-screen">
    <div class="xl:flex items-start bg-white justify-between">
      <div
        class="w-full max-w-lg bg-white xl:shadow-2xl xl:sticky top-0 mx-auto"
      >
        <div
          class="
            relative
            pb-full
            bg-gray-500
            xs:h-auto xs:rectangle
            animate__animated animate__fadeIn
          "
        >
          <img
            v-if="exhibition.cover_image == ''"
            class="absolute h-full w-full object-cover"
            src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Afewerk_Tekle_1965.jpg"
            alt=""
            srcset=""
          />
          <img
            v-else
            class="absolute h-full w-full object-cover"
            :src="'/storage/' + exhibition.cover_image"
            :alt="exhibition.title"
          />
        </div>
      </div>
      <div class="flex-1 space-y-7 px-7">
        <p class="uppercase tracking-wider xl:text-4xl text-xl py-2">
          {{ exhibition.title }}
        </p>
        <hr />
        <div class="flex items-center">
          <p class="uppercase text-sm text-gray-700 tracking-widest">
            {{ exhibition.starting_date }}
          </p>
          <p class="text-sm">&nbsp; - &nbsp;</p>
          <p class="uppercase text-sm text-gray-700 tracking-widest">
            {{ exhibition.end_date }}
          </p>
        </div>
        <p class="uppercase text-xs text-gray-500 tracking-widest">
          featured artists
        </p>
        <div class="flex items-center -space-x-3 overflow-hidden px-4 py-2">
          <div
            v-for="featured_artist in exhibition.artists"
            :key="featured_artist"
          >
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
              :alt="featured_artist.first_name"
            />
          </div>
        </div>
        <div v-if="exhibition.artists.length > 0" class="flex space-x-2">
          <p class="tracking-widest font-light">
            {{ formatFeaturedArtists() }}
          </p>
        </div>
        <div v-else>
          <p class="text-xs">sorry, no artist yet</p>
        </div>
        <p
          class="
            animate__animated animate__fadeInUp
            max-w-7xl
            text-gray-600
            tracking-wider
            first-letter:text-4xl
            font-light
            leading-relaxed
            text-justify
          "
        >
          {{ exhibition.description }}
        </p>
        <hr class="opacity-40 max-w-2xl" />

        <p class="uppercase text-sm text-gray-500 tracking-widest">
          Installation views
        </p>
        <div class="flex flex-wrap items-center">
          <img
            src="https://kam.illinois.edu/sites/kam.illinois.edu/files/styles/home_slider/public/f2020_ArtSince1948_p1_0.jpg?itok=HJdPAwJz"
            :alt="exhibition_image.id"
            class="w-96 h-auto object-cover p-2"
            v-for="exhibition_image in exhibition.exhibition_images"
            :key="exhibition_image.id"
          />
        </div>
      </div>
    </div>
  </div>
</template>
    
<script>
import Layout from "../../Shared/Layout.vue";
import { Link } from "@inertiajs/inertia-vue3";
export default {
  layout: Layout,
  components: {
    Link,
  },
};
</script>
<script setup>
import { defineProps, computed } from "vue";
// import Exhibition from "../../../Components/Artist/Exhibition.vue";

const props = defineProps({
  exhibition: Object,
});

const exhibition = computed(() => {
  return props.exhibition;
});

function formatFeaturedArtists() {
  let artistsNames = "";
  if (exhibition.value.artists.length > 1) {
    for (let index = 0; index < exhibition.value.artists.length; index++) {
      const element = exhibition.value.artists[index].first_name;

      artistsNames += element;
      if (
        index != exhibition.value.artists.length - 1 &&
        index != exhibition.value.artists.length - 2
      ) {
        artistsNames += ", ";
      }
      if (index == exhibition.value.artists.length - 2) {
        artistsNames += " & ";
      }
    }
    return artistsNames;
  }
  return exhibition.value.artists[0].first_name;
}
</script>