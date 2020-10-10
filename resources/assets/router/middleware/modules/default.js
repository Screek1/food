import router from 'vue-router'
import store from '@store'
import { setTitle } from '@helpers/documentTitle';

export default function Default (router) {
    router.beforeEach((to, from, next) => {
        if (to.meta.auth === true && !store.getters.getToken) {
            return next({ name: 'admin-login' });
        }

        if (to.name === 'admin-login' && store.getters.getToken && store.getters.getLoggedIn) {
            return next({name: 'admin-products'})
        }

        setTitle(to);
        return next();
    });

    router.afterEach((to, from) => {
        //
    });
}
