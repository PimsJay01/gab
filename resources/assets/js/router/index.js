import Vue from 'vue';
import Router from 'vue-router';
import VueLocalStorage from 'vue-localstorage';

import Test from ':/pages/Test.vue';
import AboutUs from ':/pages/AboutUs.vue';

Vue.use(Router);
Vue.use(VueLocalStorage);

export default new Router({
  routes: [
    {
      path:  '/',
      name:  'Home',
      component: Test,
    },
    {
      path:  '/welcome',
      alias: '/accueil',
      redirect: {
          name: 'Home'
      }
    },
    {
      path:  '/about-us',
      alias: '/qui-sommes-nous',
      name:  'About-us',
      component: AboutUs
    },
    // {
    //   path: '/view/:id',
    //   name: 'View Note',
    //   component: Note,
    //   props: true,
    // },
    // {
    //   path: '/new',
    //   name: 'Create Note',
    //   component: CreateNote,
    // },
    // {
    //   path: '/edit/:id',
    //   name: 'Edit Note',
    //   component: CreateNote,
    //   props: true,
    // },
  ],
});
