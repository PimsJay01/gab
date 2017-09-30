import Vue from 'vue';
import Router from 'vue-router';
import VueLocalStorage from 'vue-localstorage';

import Test from ':/pages/Test.vue';

Vue.use(Router);
Vue.use(VueLocalStorage);

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Welcome',
      component: Test,
    },
    {
      path: '/test',
      name: 'Test',
      component: Test
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
