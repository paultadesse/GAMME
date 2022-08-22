<template>
  <div class="snap-y snap-mandatory h-screen overflow-y-auto">
    <div
      class="
        slide
        relative
        h-screen
        snap-start
        w-full
        bg-cover bg-fixed bg-center bg-no-repeat
        animate__animated animate__fadeIn
      "
      :style="{ 'background-image': `url(${mainBg})` }"
    >
      <div class="absolute bottom-0 h-3/4">
        <div
          class="
            animate__animated animate__fadeIn animate__delay-1s
            flex
            h-full
            w-full
            flex-col
            justify-center
            px-12
          "
        >
          <div
            class="
              space-y-2
              bg-gray-50
              py-2
              px-4
              opacity-75
              border-l-4 border-black
            "
          >
            <p
              class="
                z-10
                text-xl
                font-light
                uppercase
                tracking-widest
                text-black
              "
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
              {{ mainBgContent["artistName"] }} | modern arts
            </p>
            <p
              class="
                z-10
                text-sm
                font-light
                uppercase
                tracking-widest
                text-black
              "
            >
              Ethiopia is the origin of everything
            </p>
            <hr />
            <p class="text-sm tracking-wider max-w-2xl">
              {{ mainBgContent["description"] }}
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
              @click="handleShowPrevious"
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
              @click="handleShowNext"
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

    <div class="h-screen snap-start bg-white">
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
            <p class="text-sm tracking-widest">
              Leonardo da Vinci | c. 1483–86
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="h-screen snap-start bg-white shadow-2xl">
      <div
        class="h-full w-full bg-cover bg-fixed"
        style="
          background-image: url('https://img.artlogic.net/w_1800,h_1800,c_limit/exhibit-e/559650f9cfaf34ff158b4568/17501fce6a6d591a21f1137204617611.jpeg');
        "
      >
        <div class="relative h-full flex justify-center items-center">
          <div
            class="
              text-center
              space-y-4
              bg-white
              py-16
              bg-opacity-90
              shadow-2xl
            "
          >
            <p class="text-4xl font-bold">Head of a Woman</p>
            <p class="text-sm tracking-widest">Leonardo da Vinci | 1500–10</p>
            <hr class="w-7 h-7 border-black mx-auto" />
            <p class="max-w-2xl text-gray-500">
              Head of a Woman, a small brush drawing with pigment, depicts a
              young woman with her head tilted and her eyes downcast. Her
              posture recalls the Virgin Mary in Leonardo’s The Virgin of the
              Rocks, suggesting that the drawing may have served as a model.
            </p>
          </div>
          <div class="absolute bottom-0 w-full">
            <Footer />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Layout from "../Shared/Layout.vue";
import Footer from "../Shared/Footer";
export default {
  layout: Layout,
};
</script>

<script setup>
import { ref } from "vue";
const slideImages = [
  {
    path: "https://artlogic-res.cloudinary.com/w_2000,h_2000,c_limit,f_auto,fl_lossy,q_auto/ws-addisfineart/usr/images/pages/slideshow_data/1/addisgezehagn_floatingcity_installphotography_june2022_addisfineart_lucyemms-16-.jpg",
    content: {
      artistName: "Paul tad",
      description:
        "Head of a Woman, a small brush drawing with pigment, depicts a young woman with her head tilted and her eyes downcast. Her posture recalls the Virgin Mary in Leonardo’s The Virgin of the Rocks, suggesting that the drawing may have served as a model.",
    },
  },
  {
    path: "https://img.artlogic.net/w_1800,h_1800,c_limit/exhibit-e/559650f9cfaf34ff158b4568/17501fce6a6d591a21f1137204617611.jpeg",
    content: {
      artistName: "BenOmi Tekle",
      description:
        "Head of a Woman, a small brush drawing with pigment, depicts a young woman with her head tilted and her eyes downcast. Her posture recalls the Virgin Mary in Leonardo’s The Virgin of the Rocks, suggesting that the drawing may have served as a model.",
    },
  },
  {
    path: "https://beerslondon.com/wp-content/uploads/2022/02/DSC9875HR-1.jpg",
    content: {
      artistName: "leonardo da vinci",
      description:
        "Head of a Woman, a small brush drawing with pigment, depicts a young woman with her head tilted and her eyes downcast. Her posture recalls the Virgin Mary in Leonardo’s The Virgin of the Rocks, suggesting that the drawing may have served as a model.",
    },
  },
  {
    path: "https://images.unsplash.com/photo-1515169273894-7e876dcf13da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80",
    content: {
      artistName: "afewerk tekle",
      description:
        "Head of a Woman, a small brush drawing with pigment, depicts a young woman with her head tilted and her eyes downcast. Her posture recalls the Virgin Mary in Leonardo’s The Virgin of the Rocks, suggesting that the drawing may have served as a model.",
    },
  },
];
let counter = ref(0);
let mainBg = ref(slideImages[0].path);
let mainBgContent = ref(slideImages[0].content);

setInterval(function () {
  mainBg.value = slideImages[counter.value].path;
  mainBgContent.value = slideImages[counter.value].content;
  counter.value++;
  if (counter.value > slideImages.length - 1) {
    counter.value = 0;
  }
}, 5000);

function getCurrentImageIndex() {
  const index = slideImages.map((object) => object.path).indexOf(mainBg.value);
  return index;
}

function handleShowPrevious() {
  getCurrentImageIndex() == 0
    ? (counter.value = slideImages.length - 1)
    : (counter.value = getCurrentImageIndex() - 1);
  mainBg.value = slideImages[counter.value].path;
  mainBgContent.value = slideImages[counter.value].content;
}

function handleShowNext() {
  getCurrentImageIndex() != slideImages.length - 1
    ? (counter.value = getCurrentImageIndex() + 1)
    : (counter.value = 0);
  mainBg.value = slideImages[counter.value].path;
  mainBgContent.value = slideImages[counter.value].content;
}
</script>
<style>
.slide {
  transition: 2s;
}
</style>