<template>
  <div class="space-y-12">
    <h1 class="tracking-wide text-2xl font-bold">Artist</h1>
    <!-- component -->
    <div>
      <Link :href="route('artist.work.create', { artist: artist })">
        <button
          class="
            focus:ring-2 focus:ring-offset-2 focus:ring-black
            mt-4
            sm:mt-0
            inline-flex
            items-center
            justify-start
            px-3
            py-1
            bg-gray-800
            hover:bg-gray-700
            focus:outline-none
            rounded-full
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke=""
            class="w-7 h-7 fill-white stroke-gray-800"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
            />
          </svg>

          <p
            class="
              text-xs
              uppercase
              tracking-wider
              font-medium
              leading-none
              text-white
              px-1
            "
          >
            Add works
          </p>
        </button>
      </Link>
    </div>
    <div class="flex space-x-2">
      <div class="w-4/6 bg-white p-8 border rounded">
        <div class="grid grid-cols-12 gap-4 place-itesms-center pb-4">
          <div class="col-span-6">
            <img
              class="w-40 h-40 object-cover"
              :src="'/storage/' + artist.photo"
              alt=""
            />
          </div>
          <div class="col-span-6 self-center">
            <button
              class="
                bg-gray-700
                text-white text-xs
                tracking-widest
                px-4
                py-1
                rounded
              "
            >
              Update Photo
            </button>
          </div>
        </div>
        <div class="grid grid-cols-12 gap-4 place-itesms-center">
          <div class="col-span-3 space-y-2">
            <p class="text-xs uppercase tracking-wider font-bold text-gray-400">
              first name
            </p>
            <p>{{ artist.first_name }}</p>
          </div>
          <div class="col-span-3 space-y-2">
            <p class="text-xs uppercase tracking-wider font-bold text-gray-400">
              last name
            </p>
            <p>{{ artist.last_name }}</p>
          </div>
          <div class="col-span-3 space-y-2">
            <p class="text-xs uppercase tracking-wider font-bold text-gray-400">
              date of birth
            </p>
            <p>{{ artist.date_of_birth }}</p>
          </div>

          <div class="col-span-12 py-4">
            <hr class="w-96" />
          </div>

          <div class="col-span-12 space-y-2">
            <p class="text-xs uppercase tracking-wider font-bold text-gray-400">
              biography
            </p>
            <p class="text-justify">{{ artist.biography }}</p>
          </div>
          <div class="col-span-12">
            <button
              class="
                bg-gray-700
                text-white text-xs
                tracking-widest
                px-4
                py-2
                rounded
              "
            >
              Save Changes
            </button>
          </div>
        </div>
      </div>
      <div class="bg-white items-center w-2/6 border rounded">
        <div class="h-1/2">
          <div class="flex justify-center items-center h-full">
            <div class="text-center space-y-2">
              <p class="tracking-wider text-2xl font-light">Total works</p>
              <p class="text-2xl font-bold">{{ artist.works.length }}</p>
            </div>
          </div>
        </div>
        <hr />
        <div class="h-1/2">
          <div class="flex justify-center items-center h-full">
            <div class="text-center space-y-2">
              <p class="tracking-wider text-2xl font-light">
                Total exhibitions
              </p>
              <p class="text-2xl font-bold">{{ artist.exhibitions.length }}</p>
            </div>
          </div>
        </div>
        <!-- <div class="grid grid-cols-12 gap-2 place-items-center self-center p-8">
          <div class="col-span-12 py-7">
            <p>Works</p>
          </div>
          <div class="col-span-3" v-for="work in artist.works" :key="work.id">
            <img src="" class="h-32 w-32" alt="" />
            <p>title</p>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</template>
  
         
  
  <script>
import Layout from "../Layout/Layout.vue";
import { ref, computed } from "vue";
export default {
  layout: Layout,
};
</script>
<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { computed } from "vue";

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
  