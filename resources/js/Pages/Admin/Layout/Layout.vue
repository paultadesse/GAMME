<template>
  <section class="flex">
    <div
      class="
        bg-gray-800
        border-r
        flex flex-col
        justify-between
        pt-24
        space-y-4
        w-1/6
        min-h-screen
        shadow-2xl
      "
    >
      <div class="space-y-6">
        <Link
          :href="route('dashboard')"
          class="flex items-center py-7 space-x-1 px-4 text-white"
        >
          <span class="uppercase text-3xl tracking-wider font-bold">Gamme</span>
          <span>|</span>
          <span
            class="text-xs uppercase tracking-wider text-gray-300 font-light"
            >Admin panel</span
          >
        </Link>
        <hr />
        <div class="px-4 space-y-4">
          <Link
            :href="route('dashboard')"
            :class="[
              $page.component == 'Admin/Dashboard'
                ? 'bg-gray-200 text-black'
                : '',
            ]"
            class="
              flex
              items-center
              space-x-2
              tracking-widest
              text-white text-xs
              py-2
              px-2
              uppercase
              rounded
            "
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
                d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"
              />
            </svg>

            <span> Dashboard </span>
          </Link>
          <Link
            :href="route('artist.list')"
            :class="[
              $page.component == 'Admin/Artist/Artists' ||
              $page.component == 'Admin/Artist/Create' ||
              $page.component == 'Admin/Artist/Show' ||
              $page.component == 'Admin/Work/Create'
                ? 'bg-gray-200 text-black'
                : '',
            ]"
            class="
              flex
              items-center
              space-x-2
              tracking-widest
              text-white text-xs
              py-2
              px-2
              uppercase
              rounded
            "
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
                d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"
              />
            </svg>

            <span> Artists </span>
          </Link>
          <Link
            :href="route('exhibition.list')"
            :class="[
              $page.component == 'Admin/Exhibition/Exhibitions' ||
              $page.component == 'Admin/Exhibition/Create' ||
              $page.component == 'Admin/Exhibition/Show' 
                ? 'bg-gray-200 text-black'
                : '',
            ]"
            class="
              flex
              items-center
              space-x-2
              tracking-widest
              text-white text-xs
              py-2
              px-2
              uppercase
              rounded
            "
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
                d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819"
              />
            </svg>

            <span> Exhibitions </span>
          </Link>
        </div>
      </div>
      <div class="p-7">
        <NavLink
          href="/logout"
          class="tracking-wider bg-white px-3 py-2 rounded text-sm"
          method="post"
          as="button"
        >
          Logout
        </NavLink>
      </div>
    </div>
    <section class="flex-1 bg-gray-50 p-32">
      <slot />
    </section>
  </section>
</template>
  
  <script setup>
import { Link } from "@inertiajs/inertia-vue3";
import NavLink from "../../../Shared/NavLink.vue";
import { computed } from "vue";

const route = computed(() => {
  return window.route;
});
</script>