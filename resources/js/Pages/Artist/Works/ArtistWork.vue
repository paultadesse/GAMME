<template>
  <div class="pt-48 pb-12 px-12">
    <div class="xl:flex items-start bg-white justify-between">
      <div class="w-full max-w-xl bg-white shadow-2xl xl:sticky top-0 mx-auto">
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
            class="absolute h-full w-full object-cover"
            src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Afewerk_Tekle_1965.jpg"
            alt=""
            srcset=""
          />
        </div>
      </div>
      <div class="xl:w-1/2 space-y-7">
        <p class="uppercase tracking-wider text-4xl">{{ work.title }}</p>
        <hr />
        <div class="flex items-center space-x-2">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Afewerk_Tekle_1965.jpg"
            alt=""
            class="rounded-full w-16 h-16 object-cover"
          />
          <p class="tracking-widest font-light">{{ artist.first_name }}</p>
        </div>
        <p
          class="
            animate__animated animate__fadeInUp
            max-w-2xl
            text-gray-600
            tracking-wider
            first-letter:text-4xl
            font-light
            leading-relaxed
            text-justify
          "
        >
          {{ work.description }}
        </p>
        <hr class="opacity-40 max-w-2xl" />
        <p class="tracking-widest text-sm">
          <span class="uppercase text-xs text-gray-500">Other works by - </span>
          {{ artist.first_name }}
        </p>
        <!-- similar works by this artist -->
        <Works :artist="artist" />
      </div>
    </div>
  </div>
</template>
  
<script>
import Layout from "../../../Shared/Layout.vue";
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
import Works from "../../../Components/Artist/Works.vue";

const props = defineProps({
  work: Object,
  artist: Object,
});

const work = computed(() => {
  return props.work;
});

const artist = computed(() => {
  for (let index = 0; index < props.artist.works.length; index++) {
    const element = props.artist.works[index];
    // remove the current work from the object
    if (element.id === work.value.id) props.artist.works.splice(index, 1);
  }
  return props.artist;
});
</script>