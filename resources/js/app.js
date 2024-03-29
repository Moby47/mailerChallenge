
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/* ------------------------- Imports -------------------- */

import Vue from 'vue';

//vee validate
import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

//vue router
import router from './router'

//vuetify
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify)

//vue meta
import Meta from 'vue-meta'
Vue.use(Meta)

import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
/* ------------------------- Imports -------------------- */



/* ------------------------URL interceptor for progressbar ----------------*/

router.beforeResolve((to, from, next) => {
    // If this isn't an initial page load.
    if (to.name) {
        // Start the route progress bar.
        NProgress.start()
    }
    next()
  })
  
  router.afterEach((to, from) => {
    // Complete the animation of the route progress bar.
   NProgress.done()
  })

/* ------------------------URL interceptor for progressbar ----------------*/



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


//Vue.component('index', require('./components/index.vue'));

const app = new Vue({
    el: '#app',
    router
});
