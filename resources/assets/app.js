import Vue from 'vue'
import App from './App.vue'
import router from '@router'
import store from '@store'
import http from '@utils/http'
import api from '@api'
import _ from 'lodash'
import ElementUI from 'element-ui';

import 'element-ui/lib/theme-chalk/index.css';

Vue.prototype.$api = api;
Vue.prototype.$http = http;
Vue.use(ElementUI);

window.app = new Vue({
    router,
    store,
    template: `<app></app>`,
    components: {App},
}).$mount('#app');
