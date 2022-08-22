<template>
   <section>
        <header>
             <div class="shadw-2xl absolute top-0 h-16 w-full text-black">
               <div class="flex h-full w-full items-center justify-between px-12">
                    <p class="animate__animated animate__fadeInDown z-10 text-3xl font-bold uppercase tracking-widest text-black">Gamme</p>
                    <Nav/>
               </div>
               </div>
        </header>
   </section>
   <section>
        <slot/>
   </section>
   <!-- footer goes here -->
   <!-- this condition is for the snap scroll on the home page  -->
   <section :class="$page.component === 'Home'? 'hidden': 'block'">
        <Footer/>
   </section>
</template>

<script setup>
import Nav from "./Nav";
import Footer from "./Footer";
</script>