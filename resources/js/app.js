require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Catalog from './components/Catalog/catalogComponent.vue'
import Molodo from './components/Molodozoni/MenComponent.vue'
import Joblist from './components/JobList/joblistComponent.vue'

const routes = [
    { path: '/catalog', component: Catalog },
    { path: '/men', component: Molodo },
    { path: '/joblist', component: Joblist },

]

const router = new VueRouter({
    mode: 'history',
    routes,

    linkExactActiveClass: "active",
})

window.Vue = require('vue').default;


Vue.component('head-component', require('./components/Header/Head.vue').default);


Vue.component('menu-component', require('./components/Menu/MenuComponent.vue').default);
Vue.component('menuUp-component', require('./components/Menu/menuUpComponent.vue').default);
Vue.component('menuLeft-component', require('./components/Menu/menuLeftComponent.vue').default);









const app = new Vue({
    el: '#app',
    router
});