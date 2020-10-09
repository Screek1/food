import Vue from 'vue'
import App from './App.vue'
import router from '@router'
import store from '@store'
import http from '@utils/http'
import api from '@api'
import _ from 'lodash'
import Toast from "vue-toastification";

import Clipboard from 'v-clipboard'
import ElementUI from 'element-ui';

import "vue-toastification/dist/index.css";
import 'element-ui/lib/theme-chalk/index.css';

Vue.prototype.$api = api;
Vue.prototype.$http = http;
Vue.use(ElementUI);
Vue.use(Clipboard)

const options = {
    timeout: 1000
}
Vue.use(Toast, options);


window.app = new Vue({
    router,
    store,
    template: `<app></app>`,
    components: {App},
}).$mount('#app');
