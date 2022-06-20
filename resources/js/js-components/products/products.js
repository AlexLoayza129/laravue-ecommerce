const productsComponent = require('../../components/products/ProductComponent.vue').default;

const app = new Vue({
    el: '#products-index',
    components: { productsComponent },
});