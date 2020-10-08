import router from 'vue-router'
import store from '@store'
import { setTitle } from '@helpers/documentTitle';

export default function Default (router) {
    router.beforeEach((to, from, next) => {
        setTitle(to);
        if (to.meta.auth === true && !store.getters.getToken) {
            return next({ path: '/admin/login' });
        }

        // if (store.getters.getToken && store.getters.getLoggedIn) {
        //     return next({name: 'admin-products'})
        // }

        return next();
    });

    router.afterEach((to, from) => {
        //
    });
}
