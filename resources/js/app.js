require('./bootstrap');
window.Vue = require('vue').default;

// Vue.use(require('vue-resource'));

import App from './App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import JsonCSV from 'vue-json-csv'
import axios from 'axios';
import {routes} from './routes';

Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('download-csv', JsonCSV);


Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});