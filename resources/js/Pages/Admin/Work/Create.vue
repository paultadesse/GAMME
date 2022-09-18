<template>
  <div class="space-y-12">
    <Link
      :href="route('admin.artist.show', { artist: artist })"
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
    <h1 class="tracking-wide text-2xl font-bold">Add Works</h1>
    <div class="">
      <p class="text-sm">
        <span class="uppercase tracking-wider"
          >Currently adding work for artist -
        </span>
        <span class="font-bold">{{
          artist.first_name + " " + artist.last_name
        }}</span>
      </p>
    </div>

    <form @submit.prevent="submit">
      <div class="grid grid-cols-8 gap-4">
        <div class="col-span-4">
          <input
            v-model="form.title"
            type="text"
            name="title"
            id="title"
            class="bg-white w-full border-gray-300 rounded text-sm"
            placeholder="title"
          />
          <div
            class="mt-2 text-xs text-red-500"
            v-if="form.errors.title"
            v-text="form.errors.title"
          ></div>
        </div>
        <div class="col-span-8">
          <textarea
            v-model="form.description"
            type="text"
            name="bio"
            id="bio"
            class="bg-white w-full border-gray-300 rounded text-sm"
            placeholder="description"
            rows="7"
          ></textarea>
          <div
            class="mt-2 text-xs text-red-500"
            v-if="form.errors.description"
            v-text="form.errors.description"
          ></div>
        </div>

        <div class="col-span-2">
          <label for="photo" class="text-sm tracking-wider text-gray-500"
            >Photo</label
          >
          <input
            type="file"
            name="photo"
            id="photo"
            @change="changeFile"
            class="
              border
              text-sm text-grey-500
              file:mr-5
              file:py-2
              file:px-6
              file:rounded
              file:border-0
              file:text-sm
              file:font-medium
              file:bg-black
              file:tracking-wide
              file:text-white
              hover:file:cursor-pointer hover:file:bg-gray-700
            "
          />
          <div
            class="mt-2 text-xs text-red-500"
            v-if="form.errors.photo"
            v-text="form.errors.photo"
          ></div>
        </div>

        <div class="col-span-8">
          <button
            class="
              float-right
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
            submit
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
  artist: Object,
});

const artist = computed(() => {
  return props.artist;
});

let processing = ref(false)

let form = useForm({
  artist_id: artist.value.id,
  title: "",
  description: "",
  photo: null,
});

function changeFile(e) {
  form.photo = e.target.files[0];
}

let submit = () => {
  form.submit("post", "/admin/artist/work/create", {
    onStart: () => processing.value = true,
    onFinish: () => processing.value = false,
    onSuccess: () => form.reset(),
  });
  // console.log(photoo.files)
  // console.log(form);
};
</script>

