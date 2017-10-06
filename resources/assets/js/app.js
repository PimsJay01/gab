
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

import Vue from 'vue'

import App from ':/App.vue'

import Router from './router'
Vue.use(Router)

// Vue.prototype.$last = function (item, list) {
//   return item === list[list.length - 1]
// }

new Vue({
    el: '#app',
    router: Router,
    template: '<App/>',
    components: { App }
});
