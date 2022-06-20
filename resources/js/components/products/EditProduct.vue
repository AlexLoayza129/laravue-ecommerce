<template>
    <div>
        <div class="flex justify-center m-4">
            <div>
                <img :src="imgPlaceholder" alt="">

                <form :action="updateUrl" method="POST" class="my-4 flex flex-col">
                    <input type="hidden" name="_token" :value="csrf">

                    <label for="name">Nombre:</label>
                    <input required :value="name" :placeholder="product.name" class="border border-gray-200 outline-blue-300 px-8 py-4 rounded-md mb-2" type="text" name="name" id="name">

                    <label for="description">Descripción:</label>
                    <textarea required :value="description" :placeholder="product.description" class="border border-gray-200 outline-blue-300 px-8 py-4 rounded-md mb-2" name="description" id="description"></textarea>
                
                    <label for="price">Precio:</label>
                    <input required :value="price" :placeholder="product.price" class="border border-gray-200 outline-blue-300 px-8 py-4 rounded-md mb-2" type="text" name="price" id="price">
                    
                    <input class="text-white px-8 py-2 text-center bg-blue-400 boder-b-2 border-blue-500 rounded-md my-4 cursor-pointer" type="submit" value="Actualizar">
                    <a :href="backUrl" class="text-white px-8 py-2 text-center bg-purple-500 border-b-2 border-purple-600 rounded-md cursor-pointer">Volver</a>
                </form>
            </div>            
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            imgPlaceholder: 'https://mybucketaloayza.s3.amazonaws.com/images/ecommerce/placeholder_product.jpg',
            backUrl: route('products.update', this.product.id),
            updateUrl: route('products.update', this.product.id),
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            name: this.product.name,
            description: this.product.description,
            price: this.product.price
        }
    },
    props:{
        product:{
            required: true,
            type: Object
        }
    },
    created(){
    }
}
</script>

<style>

</style>