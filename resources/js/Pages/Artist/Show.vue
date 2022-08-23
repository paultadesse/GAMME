<template>
  <div class="pt-48 pb-12 px-12">
    <div class="xl:flex items-start bg-white justify-center">
      <div class="w-full max-w-md bg-black shadow-2xl sticky top-0 mx-auto">
        <div
          class="
            relative
            pb-full
            bg-gray-500
            xs:h-auto xs:rectangle
            animate__animated animate__fadeIn
          "
        >
          <img
            class="absolute h-full w-full object-cover"
            src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Afewerk_Tekle_1965.jpg"
            alt=""
            srcset=""
          />
        </div>
        <div
          class="
            py-6
            text-2xl
            tracking-widest
            font-light
            uppercase
            animate__animated animate__fadeInLeft
          "
        >
          <div class="px-4 text-white">
            <h1 class="">Afewerk Tekle</h1>
            <span>B. 1932</span>
          </div>
        </div>
      </div>
      <div class="flex-1">
        <div
          class="
            flex
            justify-evenly
            items-center
            font-light
            uppercase
            tracking-widest
            sticky top-0 bg-white bg-opacity-95 py-12 z-20
          "
        >
          <div :class="show_biography ? 'border-b-4 border-black text-lg font-bold' : 'text-gray-500'" class="cursor-pointer" @click="handleComponents('show_biography')">
            Biography
          </div>
          <div :class="show_works ? 'border-b-4 border-black text-lg font-bold' : 'text-gray-500'" class="cursor-pointer"  @click="handleComponents('show_works')">works</div>
          <div :class="show_exhibition ? 'border-b-4 border-black text-lg font-bold' : 'text-gray-500'" class="cursor-pointer" @click="handleComponents('show_exhibition')">exhibition</div>
        </div>
        <!-- artist content goes here it could be [ biography, works or exhibition ]  -->
        <div class="flex justify-center pt-16">
            <Biography v-if="show_biography" class="z-10"/>
            <Works v-if="show_works" class="z-10"/>
            <Exhibition v-if="show_exhibition"/>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Layout from "../../Shared/Layout.vue";
export default {
  layout: Layout,
};
</script>
<script setup>
import { breakStatement } from "@babel/types";
import { ref, defineAsyncComponent } from "vue";

const show_biography = ref(true);
const show_works = ref(false);
const show_exhibition = ref(false);

const Biography = defineAsyncComponent(() => import('../../Components/Artist/Biography.vue'))
const Works = defineAsyncComponent(() => import('../../Components/Artist/Works.vue'))
const Exhibition = defineAsyncComponent(() => import('../../Components/Artist/Exhibition.vue'))

function handleComponents(show){
    switch (show) {
        case 'show_biography':
            show_works.value = false;
            show_exhibition.value = false;
            show_biography.value = true;
            break;
        case 'show_works':
            show_biography.value = false;
            show_exhibition.value = false;
            show_works.value = true;
            break;
        case 'show_exhibition':
            show_biography.value = false;
            show_works.value = false;
            show_exhibition.value = true;
            break;
        default:
            break;
    }
}

</script>