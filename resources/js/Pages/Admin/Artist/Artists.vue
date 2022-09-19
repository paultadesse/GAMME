<template>
  <div class="space-y-12">
    <h1 class="tracking-wide text-2xl font-bold">Artists</h1>
    <!-- component -->
    <div class="w-full">
      <div
        class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 border rounded-lg"
      >
        <Link
          :href="route('artist.create')"
          class="sm:flex items-center justify-between"
        >
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
              Add
            </p>
          </button>
        </Link>
        <div class="mt-7 overflow-x-auto">
          <table class="w-full whitespace-nowrap">
            <tbody>
              <tr
                tabindex="0"
                class="focus:outline-none h-16 border border-gray-100 rounded"
                v-for="artist in artists.data"
                :key="artist.id"
              >
                <td class="">
                  <div class="flex items-center pl-5">
                    <p
                      class="
                        text-sm
                        tracking-wide
                        leading-none
                        text-gray-700
                        mr-2
                      "
                    >
                      {{ artist.first_name }}
                    </p>
                  </div>
                </td>
                <td class="pl-24">
                  <div class="flex items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.25"
                      stroke="#52525B"
                      class="w-5 h-5"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819"
                      />
                    </svg>

                    <p class="text-xs leading-none text-gray-600 ml-2">
                      {{ artist.exhibitions.length }}
                    </p>
                  </div>
                </td>

                <td class="pl-5">
                  <div class="flex items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.25"
                      stroke="#52525B"
                      class="w-5 h-5"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75"
                      />
                    </svg>

                    <p class="text-xs leading-none text-gray-600 ml-2">
                      Sep 7, 2022
                    </p>
                  </div>
                </td>

                <td class="py-3 text-center">
                  <div class="flex item-center justify-center space-x-4">
                    <Link
                      :href="route('admin.artist.show', { artist: artist })"
                      class="w-4 transform hover:text-blue-500 hover:scale-110"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                        />
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                        />
                      </svg>
                    </Link>
                    <div
                      class="w-4 transform hover:text-blue-500 hover:scale-110"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                        />
                      </svg>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- pagination goes here -->
        <div class="mt-6 text-sm tracking-wider">
          <template v-for="link in artists.links" :key="link.label">
            <Link
              v-if="link.url"
              :href="link.url"
              v-html="link.label"
              class="p-2 border"
              :class="{ 'bg-gray-800 text-white': link.active }"
            />
            <span
              v-else
              v-html="link.label"
              class="p-2 border text-gray-400"
            ></span>
          </template>
        </div>
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
  artists: Object,
});

const artists = computed(() => {
  return props.artists;
});
</script>
