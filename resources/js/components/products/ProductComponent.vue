<template>
    <div>
        <div class="flex justify-between items-center">
            <h1 class="text-center my-4 text-xl font-bold">Productos</h1>
            <a :href="createUrl" class="text-right py-2 px-4 bg-cyan-400 border-b-2 border-cyan-500 rounded-md text-white">Crear Producto</a>
        </div>
        <ul class="grid grid-cols-1 md:grid-cols-2">
            <li class="shadow-lg p-4 m-2 rounded-md border-t-8 border-yellow-400" v-for="(product, index) in products" :key="index">
                <div class="flex justify-end">
                    <a :href="deleteProduct(product.id)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>
                <p class="my-4 text-center">{{ product.name }}<span class="bg-red-500 text-white p-2 rounded-md ml-1">S/{{ product.price}}</span></p>
                <p class="text-center">{{ product.description }}</p>
                <div class="flex justify-center items-center py-4 space-x-4">
                    <a :href="showInfo(product.id)" class="text-center cursor-pointer bg-blue-500 text-white px-4 py-2 rounded-md border-b-2 border-blue-600">Más información</a>
                    <button class="bg-green-500 text-white px-4 py-2 rounded-md border-b-2 border-green-600">Agregar al carrito</button>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props:{
            products:{
                type: Array,
                required:true
            }
        },
        data(){
            return{
                createUrl: route('products.create'),
            }
        },
        methods:{
            deleteProduct(id){
                return route('products.delete', id)
            },
            showInfo(id){
                return route('products.show', id)
            }
        },
        created(){
            this.products.reverse();
        },
    }
</script>