const createProduct  = require('../../components/products/CreateProductComponent.vue').default;

const app = new Vue({
    el: '#create-product',
    components: { createProduct },
});