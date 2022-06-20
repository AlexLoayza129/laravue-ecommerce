<template>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <img :src="imgPlaceholder" alt="">
        </div>
        <div class="relative">
            <h2 class="font-bold text-xl text-center">{{ product.name }}</h2>
            <p class="text-gray-500 my-4"><i>Descripción:</i></p>
            <p>{{ product.description}}</p>
            <div class="lg:absolute bottom-0 w-full flex justify-center space-x-4 my-4">
                <a :href="editUrl(product.id)" class="bg-yellow-400 border-b-2 border-yellow-500 text-white rounded-md px-4 py-2">
                    Editar información
                </a>
                <button class="bg-green-500 text-white px-4 py-2 rounded-md border-b-2 border-green-600">
                    Agregar al carrito
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            imgPlaceholder: 'https://mybucketaloayza.s3.amazonaws.com/images/ecommerce/placeholder_product.jpg',
        }
    },
    props:{
        product:{
            required: true,
            type: Object
        }
    },
    methods:{
        editUrl(id){
            return route('products.edit', id)
        }
    }

}
</script>

<style>

</style>