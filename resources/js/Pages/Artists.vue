<template>
    <div class="pt-32 flex lg:justify-end justify-center  px-16">
      <div class="animate__animated animate__fadeInRight">
              <form method="GET">
                <div class="relative text-gray-600 focus-within:text-gray-400">
                  <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                  </span>
                  <input type="search" name="q" class="border-b border-gray-300  py-2 text-sm text-white pl-10 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Search..." autocomplete="off">
                </div>
              </form>
          </div>
    </div>
    <div class="py-16">
   
       <div class="grid place-items-center min-h-screen">
  <!-- Responsive Grid Layout -->
  <div class="p-4 max-w-7xl grid gap-4 xs:grid-cols-2 xs:p-8 md:grid-cols-4 lg:gap-6 animate__animated animate__fadeIn">
    <h1 class="text-4xl font-extrabold xs:col-span-2 xs:grid xs:gap-4 xs:grid-cols-2 md:col-span-3 md:text-5xl md:grid-cols-3 lg:text-6xl">
      <span class="md:col-span-2 animate__animated animate__fadeInLeft uppercase tracking-widest">Meet Gamme's Artists</span>
    </h1>
    <p class="xs:row-start-2 xs:col-start-2 xs:self-center md:col-start-1 md:col-span-2 md:pr-12 md:text-xl font-light tracking-widest">using conscious skill and creative imagination the great artists of the Renaissance an artist specializing in watercolors.</p>
    <div class="relative pb-full bg-gray-500 cursor-pointer hover:hover:scale-105 transition ease-in delay-100 xs:h-auto xs:square">
      <img class="absolute h-full w-full object-cover" src="http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcR8gQcD5ewEV7b-FcPzhJ2u6OGX_lChJROgta0c6zyRPPLSe2ES6yKJQvxiQOoyjdhp" alt="" srcset="">
    </div>
    <div class="relative pb-full bg-gray-500 cursor-pointer hover:hover:scale-105 transition ease-in delay-100 xs:h-auto xs:square">
      <img class="absolute h-full w-full object-cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg/270px-Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg" alt="" srcset="">
    </div>
    <div class="relative pb-full bg-gray-900 cursor-pointer hover:hover:scale-105 transition ease-in delay-100 xs:h-auto xs:square">
      <img class="absolute h-full w-full object-cover" src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Afewerk_Tekle_1965.jpg" alt="">
    </div>
    <div class="relative pb-full bg-gray-500 cursor-pointer hover:hover:scale-105 transition ease-in delay-100 xs:h-auto xs:square md:col-start-2">
      <img class="absolute h-full w-full object-cover" src="https://www.dorsetecho.co.uk/resources/images/11876072.jpg?type=responsive-gallery-fullscreen" alt="" srcset="">
    </div>
    <div class="relative pb-full bg-gray-900 cursor-pointer hover:hover:scale-105 transition ease-in delay-100 xs:h-auto xs:square">
      <img class="absolute h-full w-full object-cover" src="https://images.theconversation.com/files/465043/original/file-20220524-19-4v4f9u.jpg?ixlib=rb-1.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip" alt="">
    </div>
    <div class="relative pb-full bg-gray-500 cursor-pointer hover:hover:scale-105 transition ease-in delay-100 xs:h-auto xs:square">
      <img class="absolute h-full w-full object-cover" src="https://ethiopianmonitor.com/wp-content/uploads/2020/10/ElUXlVmXUAAI7RK-e1603889841383-800x445.jpg" alt="">
    </div>
    <div class="relative pb-full bg-gray-500 cursor-pointer hover:hover:scale-105 transition ease-in delay-100 xs:h-auto xs:square">
      <img class="absolute h-full w-full object-cover" src="https://live.staticflickr.com/8167/7333921470_68aa17b5a8_b.jpg" alt="">
    </div>
    <div class="relative pb-full bg-gray-900 cursor-pointer hover:hover:scale-105 transition ease-in delay-100 xs:h-auto xs:square">
      <img class="absolute h-full w-full object-cover" src="https://www.ethiosports.com/wp-content/uploads/2014/02/Desta-Hagos.jpg" alt="" srcset="">
    </div>
    <p class="self-center md:text-xl md:col-span-2 md:text-center md:px-4 font-light">using conscious skill and creative imagination the great artists of the Renaissance an artist specializing in watercolors.</p>
  </div>
</div>
    </div>
</template>

<script>
import Layout from '../Shared/Layout.vue';
// import Layout from '../Shared/Layout.vue';
export default {
    layout: Layout
}
</script>