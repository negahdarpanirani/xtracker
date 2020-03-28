   import Vue from 'vue';
   import VueRoter from 'vue-router';
   import axios from 'axios';
   window.axios = axios;
   window.vue = vue;
   vue.use(VueRoter);
    require('bootstrap');


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
