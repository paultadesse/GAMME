<template>
	<nav class="z-10">
		<ul class="h-full items-center text-sm font-light uppercase tracking-widest flex space-x-32">
			<li class="animate__animated animate__fadeInDown list-none flex space-y-6 xl:space-y-0 xl:space-x-12 uppercase tracking-widest font-poppins">
				<NavLink href="/artists" :active="$page.component === 'Artists'" class="hover:text-black ">Artists</NavLink>
				<NavLink href="/exhibitions" :active="$page.component === 'Exhibitions'" class="hover:text-black ">Exhibition</NavLink>
				<NavLink href="/360view" :active="$page.component === 'View'" class="hover:text-black ">360° view</NavLink>
			</li>
		</ul>
	</nav>
</template>

<script setup>
import NavLink from "./NavLink";
</script>

<style lang="css" scoped>
</style>