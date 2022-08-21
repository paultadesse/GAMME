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
   <section>
        <div class="bg-white py-12">
            <div class="flex px-32">
                <p class="tracking-widest uppercase">Gamme art Gallary</p>
                <p class="tracking-widest uppercase px-12">|</p>
                <p class="tracking-widest ">Footer goes here</p>
            </div>
        </div>
   </section>
</template>

<script setup>
import Nav from "./Nav";
</script>