window.Vue = require('vue');

Vue.config.productionTip = false;

Vue.component('v-example', require('./components/Example.vue').default);

const app = new Vue({
    el: '#app',
});