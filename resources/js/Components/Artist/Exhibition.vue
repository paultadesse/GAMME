<template>
  <div class="grid grid-cols-4  xl:grid-cols-12 gap-4 bg-white">
    <div class="col-span-2 w-96 xl:col-span-4 bg-black shadow-2xl hover:scale-105 hover:z-20 transition ease-in delay-100" v-for="exhibition in 8" :key="exhibition">
      <div
        class="
          relative
          pb-full
          bg-gray-500
          xs:h-auto xs:square
        animate__animated animate__fadeIn animate_delay-2s
        "
      >
        <img
          class="absolute h-full w-full object-cover"
          src="https://uploads6.wikiart.org/images/afewerk-tekle/the-total-liberation-of-africa.jpg!Large.jpg"
          alt=""
          srcset=""
        />
      </div>
      <div
        class="p-12
          py-1
          text-sm
          tracking-widest
          font-light
          uppercase
          animate__animated animate__fadeInLeft
        "
      >
        <div class="text-center text-white">
          <h1 class="">Afewerk Tekle</h1>
          <span>exhibition {{ exhibition }}</span>
        </div>
      </div>
    </div>
  </div>
</template>