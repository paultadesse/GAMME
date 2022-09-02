<template>
  <div class="pt-44 px-16">
    <!-- list of exhibitions -->
    <div class="grid grid-cols-4 xl:grid-cols-12 gap-4 bg-white px-16">
      <div
        class="
          col-span-2
          xl:col-span-3
          bg-white
          shadow-2xl
          hover:scale-105 hover:z-20
          transition
          ease-in
          delay-100
        "
        v-for="exhibition in exhibitions"
        :key="exhibition.id"
      >
        <ExhibitionInfoCard :exhibition="exhibition" />
      </div>
    </div>
  </div>
</template>
  
  <script>
import Layout from "../Shared/Layout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import ExhibitionInfoCard from "../Components/Exhibition/ExhibitionInfoCard.vue";
export default {
  layout: Layout,
  components: {
    Link,
  },
};
</script>
  <script setup>
import { defineProps, computed } from "vue";
const props = defineProps({
  exhibitions: Object,
});
const exhibitions = computed(() => {
  return props.exhibitions;
});
</script>