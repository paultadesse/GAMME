<template>
  <div class="space-y-12">
    <h1 class="tracking-wide text-2xl font-bold">Exhibitions</h1>
    <!-- component -->
    <div class="w-full">
      <div
        class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 border rounded-lg"
      >
        <!-- <Link
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
        </Link> -->
        <div class="mt-7 overflow-x-auto">
          <table class="w-full whitespace-nowrap">
            <tbody>
              <tr
                tabindex="0"
                class="focus:outline-none h-16 border border-gray-100 rounded"
                v-for="exhibition in exhibitions.data"
                :key="exhibition.id"
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
                      {{ exhibition.title }}
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
                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
                      />
                    </svg>

                    <p class="text-xs leading-none text-gray-600 ml-2">
                      {{ exhibition.exhibition_images.length }}
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
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>

                    <p class="text-xs leading-none text-gray-600 ml-2">
                      {{ exhibition.starting_date }}
                    </p>
                  </div>
                </td>
                <td class="pl-5">
                  <div class="flex items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="#52525B"
                      class="w-5 h-5"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                      />
                    </svg>

                    <p class="text-xs leading-none text-gray-600 ml-2">
                      {{ exhibition.end_date }}
                    </p>
                  </div>
                </td>

                <td class="py-3 text-center">
                  <div class="flex item-center justify-center space-x-4">
                    <div
                      class="w-4 transform hover:text-blue-500 hover:scale-110"
                    >
                      <!-- <Link :href="route('admin.artist.show', {artist: artist})"
                        class="w-4 transform hover:text-blue-500 hover:scale-110"
                      > -->
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
                      <!-- </Link> -->
                    </div>
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
                          d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                        />
                      </svg>
                    </div>
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
          <template v-for="link in exhibitions.links" :key="link.label">
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
  exhibitions: Object,
});

const exhibitions = computed(() => {
  return props.exhibitions;
});
</script>
  