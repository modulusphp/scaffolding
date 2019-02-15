require('./bootstrap');

/**
 * Vue Dependencies
 */
import VueRouter from 'vue-router';
import routes from './routes.js';

/**
 * Vue components
 */
Vue.component('example-component', require('./components/example.vue').default);

/**
 * Configure Vue router
 */
Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes: routes
});

/**
 * Boot Vue
 */
const app = new Vue({
  router,
  el: '#app'
});
