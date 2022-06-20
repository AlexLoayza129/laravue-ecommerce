<template>
  <div>
    <header class="bg-white shadow-md text-black flex justify-between items-center p-4">
        <h1>Logo</h1>
        <ul class="flex space-x-4">
            <li><a class="hover:bg-gray-300 rounded-md p-2" :href="homeUrl">Inicio</a></li>
            <li><a class="hover:bg-gray-300 rounded-md p-2" :href="productsUrl">Productos</a></li>
            <li><a class="cursor-default select-none rounded-md p-2 text-gray-200">Proximamente</a></li>
        </ul>
        <a href="#" class="hover:bg-gray-300 rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
        </a>
    </header>
  </div>
</template>

<script>
export default {
    data(){
      return {
          homeUrl: route('home'),
          productsUrl: route('products.index')
      }
  }

}
</script>

<style>

</style>