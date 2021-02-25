import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Menu from "./components/Menu/MenuComponent.vue"

const routes = [
    { path: '/', component: Menu },
];


export default new VueRouter({
    mode: "history",
    routes
});
