<template>
  <Teleport to="body">
    <div v-if="alerts.length" class="fixed top-10 right-0 p-3 space-y-2">
      <div
        v-for="alert in alerts"
        :key="alert.id"
        class=""
        role="alert"
        aria-live="assertive"
        aria-atomic="true"
      >
        <div
          class="flex"
          :class="{
            'animate__animated animate__fadeInRight bg-green-100 border border-green-400  rounded-2xl px-12 py-4':
              alert.type === 'success',
            'animate__animated animate__fadeInRight bg-yellow-100 border border-yellow-400  rounded-2xl px-12 py-4':
              alert.type === 'warning',
            'animate__animated animate__fadeInRight bg-red-100 border border-red-400  rounded-2xl px-12 py-4':
              alert.type === 'danger',
          }"
        >
          <div class="flex items-center justify-around space-x-2 rounded">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="2.5"
              class="w-7 h-7"
              :class="{
                'stroke-green-500': alert.type === 'success',
                'stroke-yellow-500': alert.type === 'warning',
                'stroke-red-500': alert.type === 'danger',
              }"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
              />
            </svg>

            <p class="first-letter:uppercase text-lg font-light tracking-wider">
              {{ alert.message }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </Teleport>
</template>
<script setup>
import { computed, watch } from "vue";
import { usePage } from "@inertiajs/inertia-vue3";
import useAlerts from "../Composables/useAlerts";

const alert = computed(() => {
  return usePage().props.value.flash.alert;
});

const { addAlert, alerts } = useAlerts();

watch(
  alert,
  (newValue, oldValue) => {
    if (newValue != null) {
      addAlert(newValue);
    }
  },
  { immediate: true }
);
</script>

<style  >
</style>