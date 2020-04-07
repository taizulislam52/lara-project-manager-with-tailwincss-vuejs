require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import addRoutes from './routes'
Vue.use(VueRouter);
const app = new Vue({
    el: '#app',
    router:new VueRouter(addRoutes)
});
