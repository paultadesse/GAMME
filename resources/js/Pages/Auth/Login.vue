<template>
  <div class="grid place-items-center min-h-screen">
    <div class="border p-16 rounded shadow-2xl">
      <h1 class="py-7 space-x-1">
        <span class="uppercase text-4xl font-bold">gamme</span
        ><span
          class="
            border border-black
            text-gray-500
            px-2
            tracking-wide
            text-sm
            rounded
          "
          >Admin</span
        >
      </h1>
      <form @submit.prevent="submit">
        <div class="mb-6">
          <label class="block" for="email">Email</label>
          <input
            v-model="form.email"
            type="email"
            name="email"
            id="email"
            required class="rounded"
          />
          <div class="text-xs text-red-500 mt-1 tracking-wide" v-if="form.errors.email" v-text="form.errors.email"></div>
        </div>

        <div class="mb-6">
          <label class="block" for="password">Password</label>
          <input
            v-model="form.password"
            type="password"
            name="password"
            id="password"
            required class="rounded"
          />
          <div v-if="form.errors.password" v-text="form.errors.password"></div>
        </div>

        <div class="mb-6">
          <button
            class="hover:bg-gray-600 text-white rounded py-2 px-4 bg-black text-sm tracking-wider"
            type="submit"
            :disabled="form.processing"
          >
            Login
          </button>
        </div>
      </form>
    </div>
  </div>
</template>
<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

let form = useForm({
  email: "",
  password: "",
});

let submit = () => {
   form.submit('post','/login'); 
};
</script>