<template>
  <div class="space-y-12">
    <h1 class="tracking-wide text-2xl font-bold">Create</h1>
    <form @submit.prevent="submit">
      <div class="grid grid-cols-8 gap-4">
        <div class="col-span-4">
          <input
            v-model="form.first_name"
            type="text"
            name="first_name"
            id="first_name"
            class="bg-white w-full border-gray-300 rounded text-sm"
            placeholder="First name"
          />
          <div
            class="mt-2 text-xs text-red-500"
            v-if="form.errors.first_name"
            v-text="form.errors.first_name"
          ></div>
        </div>
        <div class="col-span-4">
          <input
            v-model="form.last_name"
            type="text"
            name="last_name"
            id="last_name"
            class="bg-white w-full border-gray-300 rounded text-sm"
            placeholder="Last name"
          />
          <div
            class="mt-2 text-xs text-red-500"
            v-if="form.errors.last_name"
            v-text="form.errors.last_name"
          ></div>
        </div>
        <div class="col-span-8">
          <textarea
            v-model="form.biography"
            type="text"
            name="bio"
            id="bio"
            class="bg-white w-full border-gray-300 rounded text-sm"
            placeholder="Biography"
            rows="7"
          ></textarea>
          <div
            class="mt-2 text-xs text-red-500"
            v-if="form.errors.biography"
            v-text="form.errors.biography"
          ></div>
        </div>
        <div class="col-span-4">
          <label for="birth" class="text-sm tracking-wider text-gray-500"
            >Birth date</label
          >
          <div class="flex items-center space-x-2" v-if="date">
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
          <Datepicker v-model="date" inline />
          <div
            class="mt-2 text-xs text-red-500"
            v-if="form.errors.birth_date"
            v-text="form.errors.birth_date"
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

const date = ref();

let form = useForm({
  first_name: "",
  last_name: "",
  biography: "",
  photo: null,
  birth_date: date,
});

function changeFile(e) {
  form.photo = e.target.files[0];
}

let submit = () => {
  form.submit("post", "create");
  // console.log(photoo.files)
  // console.log(form);
};
</script>
  