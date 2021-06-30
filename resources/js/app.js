import Vue from "vue";
import VueRouter from "vue-router";
import Login from "./components/Login.vue";

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 window.Vue = require('vue');
 Vue.component('navbar', require('./components/Navbar.vue').default);
 const nav = new Vue({
     el: '#nav',
 });


window.Vue = require('vue');
Vue.component('login-component', require('./components/Login.vue').default);
const app = new Vue({
    el: '#app',
});





Vue.use(VueRouter);


const routes = [

  
  {
    path: "/",
    name: "login",
    component: Home,
  },
  // {
  //   path: "/about",
  //   name: "About",
  //   // route level code-splitting
  //   // this generates a separate chunk (about.[hash].js) for this route
  //   // which is lazy-loaded when the route is visited.
  //   component: () =>
  //     import(/* webpackChunkName: "about" */ "../views/About.vue"),
  // },

  {
    path: "/dashboard",
    name: "Dashboard",
    component: Login,
    meta: {
      guest: true 
    }
  },

  {
    path: "/register",
    name: "register",
    component: Register,
    meta: {
      guest: true 
    }
  },

  {
    path: "/profile",
    name: "profile",
    component: Profile,
    meta: {
      secure: true 
    }
  },

];



const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.secure)) {
    // this route requires auth, check if logged in
    // if not, redirect to login page.
    if (localStorage.getItem('token') == null) {
      next({
        path: '/login',
        query: { redirect: to.fullPath }

      })
    } else {
      next()
    }
  } else {
    next() // make sure to always call next()!
  }
})



export default router;
