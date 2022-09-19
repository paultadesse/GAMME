<template>
  <div class="space-y-12">
    <Link
      :href="route('admin.exhibition.show', { exhibition: exhibition })"
      class="underline inline-flex space-x-2"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="w-5 h-5"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3"
        />
      </svg>

      <p>back</p>
    </Link>
    <h1 class="tracking-wide text-2xl font-bold">Assign Artist</h1>
    <div class="">
      <p class="text-sm">
        <span class="uppercase tracking-wider"
          >Currently assigning artist for
        </span>
        <span class="font-bold">{{ exhibition.title }}</span>
      </p>
    </div>

    <form @submit.prevent="submit">
      <div class="grid grid-cols-8 gap-4">
        <div class="col-span-4">
          <label for="artist"> Pick Artist </label>
          <select
            name="artist"
            id="artist"
            class="
              mt-1
              block
              w-full
              pl-3
              pr-10
              py-2
              text-base
              border-gray-300
              focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
              sm:text-sm
              rounded-md
            "
            @change="form.artist_id = $event.target.value"
          >
          <option value=""></option>
            <option
              v-for="artist in artists"
              :key="artist.id"
              :value="artist.id"
              :selected="artist.id === form.artist_id"
            >
              {{ artist.first_name }}
            </option>
          </select>
          <div class="mt-2 text-xs text-red-500" v-if="form.errors.artist_id">
            please pick an artist
          </div>
        </div>

        <div class="col-span-8">
          <button
            class="
              hover:bg-gray-600
              text-white
              rounded
              py-2
              px-4
              bg-black
              text-sm
              tracking-wider
            "
            type="submit"
            :disabled="processing"
          >
            assign
          </button>
        </div>
      </div>
    </form>
  </div>
</template>
  
  <script>
import Layout from "../Layout/Layout.vue";
export default {
  layout: Layout,
};
</script>
  <script setup>
import { ref, computed, defineProps } from "vue";
import { Link, useForm } from "@inertiajs/inertia-vue3";

const route = computed(() => {
  return window.route;
});

const props = defineProps({
  artists: Object,
  exhibition: Object,
});

const artists = computed(() => {
  return props.artists;
});

const exhibition = computed(() => {
  return props.exhibition;
});

let processing = ref(false);

let form = useForm({
  artist_id: "",
  exhibition_id: exhibition.value.id,
});

let submit = () => {
  form.submit("post", "/admin/exhibition/artist/assign", {
    onStart: () => (processing.value = true),
    onFinish: () => (processing.value = false),
    onSuccess: () => form.reset(),
  });
};
</script>
  
  