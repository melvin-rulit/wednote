require('./bootstrap');
window.Vue = require('vue').default;

import Vue from 'vue'

// VueRouter
import VueRouter from 'vue-router'
Vue.use(VueRouter)


// BootstrapVue  &  BootstrapVueIcons
import { BootstrapVue, IconsPlugin, BootstrapVueIcons} from 'bootstrap-vue'

Vue.use(BootstrapVue)







import Home from './components/Home/HomeComponent.vue'
import getCatalog from './components/Catalog/catalogComponent.vue'
import catalog from './components/Catalog/catalogIdComponent.vue'
import Molodo from './components/Molodozoni/MenComponent.vue'
import Joblist from './components/JobList/joblistComponent.vue'

const routes = [
    { path: '/', name : 'home', component: Home },
    { path: '/getCatalog', name : 'getCatalog', component: getCatalog },
    { path: '/catalog', name : 'catalog', component: catalog, props: true   },
    { path: '/men', component: Molodo },
    { path: '/joblist', component: Joblist },

]

const router = new VueRouter({
    // mode: 'history',
    mode: 'abstract',
    routes,

    linkExactActiveClass: "active",
})




Vue.component('head-component', require('./components/Uknow/Head.vue').default);
// Vue.component('test-component', require('./components/TestComponent.vue').default);


Vue.component('menu-component', require('./components/Menu/MenuComponent.vue').default);
Vue.component('menuUp-component', require('./components/Menu/menuUpComponent.vue').default);
Vue.component('menuLeft-component', require('./components/Menu/menuLeftComponent.vue').default);









const app = new Vue({
    el: '#app',
    router
});
