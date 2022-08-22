<template>
  <div
    class="relative h-screen w-full bg-cover bg-fixed bg-center bg-no-repeat"
    style="
      background-image: url('https://artlogic-res.cloudinary.com/w_2000,h_2000,c_limit,f_auto,fl_lossy,q_auto/ws-addisfineart/usr/images/pages/slideshow_data/1/addisgezehagn_floatingcity_installphotography_june2022_addisfineart_lucyemms-16-.jpg');
    "
  >
    <div class="absolute bottom-0 h-3/4">
      <div
        class="
          animate__animated animate__fadeInLeft
          flex
          h-full
          w-full
          flex-col
          justify-center
          px-12
        "
      >
        <div class="space-y-2 bg-gray-50 py-2 px-4 opacity-75 border-l-4 border-black">
          <p
            class="z-10 text-xl font-light uppercase tracking-widest text-black"
          >
            Artist
          </p>
          <p
            class="
              z-10
              text-3xl
              font-light
              uppercase
              tracking-widest
              text-black
            "
          >
            paul tad | modern arts
          </p>
          <p
            class="z-10 text-sm font-light uppercase tracking-widest text-black"
          >
            Ethiopia is the origin of everything
          </p>
          <hr>
          <p class="text-sm tracking-wider max-w-2xl">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi iste porro magnam. Unde libero id repellat eaque at aspernatur modi fugiat tenetur ducimus praesentium quaerat est, pariatur officiis, consequatur velit!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi iste porro magnam. Unde libero id repellat eaque at aspernatur modi fugiat tenetur ducimus praesentium quaerat est, pariatur officiis, consequatur velit!
          </p>
        </div>
      </div>
    </div>
    <div class="absolute bottom-0 z-10 w-full px-12">
      <div class="flex items-end justify-end">
        <div
          class="
            flex
            items-center
            space-x-7
            bg-white
            px-4
            py-2
            text-xs
            uppercase
            tracking-widest
            text-black
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="
              h-6
              w-6
              cursor-pointer
              transition
              delay-100
              ease-in
              hover:scale-105
            "
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M11 17l-5-5m0 0l5-5m-5 5h12"
            />
          </svg>

          <p>|</p>

          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="
              h-6
              w-6
              cursor-pointer
              transition
              delay-100
              ease-in
              hover:scale-105
            "
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M13 7l5 5m0 0l-5 5m5-5H6"
            />
          </svg>
        </div>
      </div>
    </div>
    <div class="absolute inset-0 -z-0 bg-black opacity-0"></div>
  </div>

  <div class="h-screen bg-white">
    <div
      class="h-full w-full bg-cover bg-fixed"
      style="
        background-image: url('https://beerslondon.com/wp-content/uploads/2022/02/DSC9875HR-1.jpg');
      "
    >
      <div
        class="h-full bg-white bg-opacity-60 flex justify-center items-center"
      >
        <div class="space-y-4 text-center">
          <p class="text-4xl font-bold">The Virgin of the Rocks</p>
          <p class="text-sm tracking-widest">Leonardo da Vinci | c. 1483–86</p>
        </div>
      </div>
    </div>
  </div>

  <div class="h-screen bg-white shadow-2xl">
    <div
      class="h-full w-full bg-cover bg-fixed"
      style="
        background-image: url('https://img.artlogic.net/w_1800,h_1800,c_limit/exhibit-e/559650f9cfaf34ff158b4568/17501fce6a6d591a21f1137204617611.jpeg');
      "
    >
      <div class="h-full flex justify-center items-center">
        <div
          class="text-center space-y-4 bg-white py-16 bg-opacity-90 shadow-2xl"
        >
          <p class="text-4xl font-bold">Head of a Woman</p>
          <p class="text-sm tracking-widest">Leonardo da Vinci | 1500–10</p>
          <hr class="w-7 h-7 border-black mx-auto" />
          <p class="max-w-2xl text-gray-500">
            Head of a Woman, a small brush drawing with pigment, depicts a young
            woman with her head tilted and her eyes downcast. Her posture
            recalls the Virgin Mary in Leonardo’s The Virgin of the Rocks,
            suggesting that the drawing may have served as a model.
          </p>
        </div>
      </div>
    </div>
    <!-- <div class=""><p>first</p></div> -->
  </div>


</template>

<script>
import Layout from "../Shared/Layout.vue";
export default {
  layout: Layout,
};
</script>

<script setup>
import { ref } from "vue";
let mainBg = ref('https://artlogic-res.cloudinary.com/w_2000,h_2000,c_limit,f_auto,fl_lossy,q_auto/ws-addisfineart/usr/images/pages/slideshow_data/1/addisgezehagn_floatingcity_installphotography_june2022_addisfineart_lucyemms-16-.jpg')
</script>