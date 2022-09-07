<template>
  <div class="space-y-12">
    <h1 class="tracking-wide text-2xl font-bold">Dashboard</h1>
    <div class="grid grid-cols-8 gap-8">
      <div class="col-span-4 bg-white p-4 space-y-2 border rounded-lg">
        <div class="flex items-center space-x-2">
          <p class="relative h-12 w-12 rounded-full bg-gray-600">
            <span class="absolute top-3 right-5 text-white font-bold">{{
              username.slice(0, 1)
            }}</span>
          </p>
          <div>
            <p class="font-semibold tracking-wide">Welcome, {{ username }}</p>
            <p class="text-gray-500 text-sm tracking-wide">sign out</p>
          </div>
        </div>
      </div>
      <div class="col-span-4 bg-white p-4 space-y-2 border rounded-lg">
        <div class="flex items-center space-x-2">
          <div>
            <p class="tracking-wide text-gray-500 text-sm">
              This month exhibition
            </p>
            <p class="tracking-wide text-2xl font-bold">7</p>
          </div>
        </div>
      </div>
      <div class="col-span-8 bg-white p-4 space-y-2 border rounded-lg">
        <div class="flex items-center space-x-2">
          <div>
            <p class="tracking-wide text-gray-500 text-sm">Total Artists</p>
            <p class="tracking-wide text-2xl font-bold">{{ totalArtists }}</p>
          </div>
        </div>
      </div>
      <div class="col-span-8 bg-white p-4 space-y-2 border rounded-lg">
        <div class="flex items-center space-x-2">
          <div>
            <p class="tracking-wide text-gray-500 text-sm">
              Total Exhibitions
            </p>
            <p class="tracking-wide text-2xl font-bold">{{ totalExhibitions  }}</p>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="">
      <div class="text-center space-y-2 border p-8 rounded">
        <h1 class="font-bold text-4xl">Total Artists</h1>
        <p class="text-3xl">{{ totalArtists }}</p>
      </div>
      <div class="text-center space-y-2 border p-8 rounded">
        <h1 class="font-bold text-4xl">Total Exhibitions</h1>
        <p class="text-3xl">{{ totalExhibitions }}</p>
      </div>
    </div> -->
  </div>
</template>

<script>
import Layout from "./Layout/Layout.vue";
export default {
  layout: Layout,
  computed: {
    username() {
      return this.$page.props.auth.user.username;
    },
  },
};
</script>
<script setup>
import NavLink from "../../Shared/NavLink.vue";
import { computed } from "vue";

const props = defineProps({
  totalArtists: Number,
  totalExhibitions: Number,
});

const totalArtists = computed(() => {
  return props.totalArtists;
});

const totalExhibitions = computed(() => {
  return props.totalExhibitions;
});
</script>

<style>
</style>