import './bootstrap';



window.Vue = require('vue').default;

import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);
 
import Home from  './components/WelcomeCompents.vue';
import Task from  './components/AnneCompent.vue';

const routes = [
    {
        path:"/",
        component:Home
    },
    {
        path:"/ta",
        component:Task
    }
];

const router   = new VueRouter({routes});

//Vue.component('app', require('./components/WelcomeCompents.vue').default);
const app = new Vue({
    el: '#app',
    router:router
});