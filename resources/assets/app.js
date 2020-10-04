import Vue from 'vue'
import App from './App.vue'
import router from '@router'
import store from '@store'
import http from '@utils/http'
import api from '@api'

Vue.prototype.$api = api;
Vue.prototype.$http = http;


window.app = new Vue({
    router,
    store,
    template: `<app></app>`,
    components: {App},
}).$mount('#app');
