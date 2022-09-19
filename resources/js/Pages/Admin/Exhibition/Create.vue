<template>
  <div class="space-y-12">
    <h1 class="tracking-wide text-2xl font-bold">Create</h1>
    <form @submit.prevent="submit">
      <div class="grid grid-cols-8 gap-4">
        <div class="col-span-4">
          <input
            v-model="form.title"
            type="text"
            name="title"
            id="title"
            class="bg-white w-full border-gray-300 rounded text-sm"
            placeholder="Title"
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
            name="description"
            id="description"
            class="bg-white w-full border-gray-300 rounded text-sm"
            placeholder="Description"
            rows="7"
          ></textarea>
          <div
            class="mt-2 text-xs text-red-500"
            v-if="form.errors.description"
            v-text="form.errors.description"
          ></div>
        </div>
        <div class="col-span-4">
          <label for="birth" class="text-sm tracking-wider text-gray-500"
            >Starting date</label
          >
          <div class="flex items-center space-x-2" v-if="starting_date">
            <p class="text-xs text-gray-500">selected</p>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-5 h-5 text-green-400"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
              />
            </svg>
          </div>
          <Datepicker v-model="starting_date" inline />
          <div
            class="mt-2 text-xs text-red-500"
            v-if="form.errors.starting_date"
            v-text="form.errors.starting_date"
          ></div>
        </div>
        <div class="col-span-4">
          <label for="birth" class="text-sm tracking-wider text-gray-500"
            >End date</label
          >
          <div class="flex items-center space-x-2" v-if="end_date">
            <p class="text-xs text-gray-500">selected</p>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-5 h-5 text-green-400"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
              />
            </svg>
          </div>
          <Datepicker v-model="end_date" inline />
          <div
            class="mt-2 text-xs text-red-500"
            v-if="form.errors.end_date"
            v-text="form.errors.end_date"
          ></div>
        </div>
        <div class="col-span-2">
          <label for="cover_image" class="text-sm tracking-wider text-gray-500"
            >Cover Image</label
          >
          <input
            type="file"
            name="cover_image"
            id="cover_image"
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
            v-if="form.errors.cover_image"
            v-text="form.errors.cover_image"
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
import { ref, computed } from "vue";
export default {
  layout: Layout,
};
</script>
  
  <script setup>
import { ref, computed } from "vue";
import Datepicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import { useForm } from "@inertiajs/inertia-vue3";

const route = computed(() => {
  return window.route;
});

let processing = ref(false);
const starting_date = ref();
const end_date = ref();

let form = useForm({
  title: "",
  description: "",
  cover_image: null,
  starting_date: starting_date,
  end_date: end_date,
});

function changeFile(e) {
  form.cover_image = e.target.files[0];
}

let submit = () => {
  form.submit("post", "/admin/exhibition/create", {
    onStart: () => (processing.value = true),
    onFinish: () => (processing.value = false),
    onSuccess: () => form.reset(),
  });
};
</script>
    