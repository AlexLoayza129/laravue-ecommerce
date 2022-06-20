<template>
  <div>
     <h1 class="text-center text-xl font-bold mb-4">Crea un producto</h1>
     <div class="flex justify-center">
        <form class="flex flex-col" :action="createUrl" method="POST">
          <input type="hidden" name="_token" :value="csrf">

          <label for="name">Nombre</label>
          <input class="border border-gray-200 outline-blue-300 px-8 py-4 rounded-md mb-2" type="text" name="name" id="name">
          
          <label for="description">Descripción</label>
          <textarea class="border border-gray-200 outline-blue-300 px-8 py-4 rounded-md mb-2" type="text" name="description" id="description"></textarea>
          
          <label for="price">Precio</label>
          <input class="border border-gray-200 outline-blue-300 px-8 py-4 rounded-md mb-2" type="text" name="price" id="price">
          
          <input class="cursor-pointer my-4 px-6 py-2 rounded-md bg-blue-500 text-white border-b-2 border-blue-600" type="submit" value="Crear producto">
      </form>
     </div>
  </div>
</template>

<script>
export default {
  data(){
      return {
        createUrl: route('products.store'),
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      }
  }
}
</script>

<style>

</style>