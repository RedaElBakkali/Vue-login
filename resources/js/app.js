require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuex from 'vuex'
// import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// // Install BootstrapVue
// Vue.use(BootstrapVue)
// // Optionally install the BootstrapVue icon components plugin
// Vue.use(IconsPlugin)
// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'
var moment = require('moment');
// test moment console.log(moment().format());
window.moment = moment;
Vue.prototype.moment = moment;
import {routes} from './routes/DashbordRoutes';
Vue.use(VueRouter)

Vue.use(Vuex)
import VueProgressBar from 'vue-progressbar'

Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '10px'
})
import VueFormulate from '@braid/vue-formulate'

Vue.use(VueFormulate)
window.Vue = require('vue');
/* The sweet alert import */
import swal from 'sweetalert2';
window.Swal = swal;

const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

window.toast = toast;
/* The end of sweet alert import */
import HomeComponent from "./components/HomeComponent";
import UserApp from "./components/Dashbord/user/UserApp";
import AdminApp from "./components/Dashbord/Admin/AdminApp";

// import random color
const router = new VueRouter({
    routes, // short for `routes: routes`
    mode:'history'
});
const app = new Vue({
    el: '#app',
    router,
    components:{
        AdminApp,
        UserApp,
        HomeComponent
    },
});
