import axios from 'axios'
import router from '@router'

import config from '@config'
import store from '@store'

const http = axios.create({
    baseURL: config.http.url,
    headers: config.http.defaultRequest.headers,
});

/**
 * Sets the X-CSRFToken header for ajax non-GET request to make CSRF protection
 * easy.
 */
if (Laravel.csrf_token) {
    http.defaults.headers.common['X-CSRF-TOKEN'] = Laravel.csrf_token;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Add a request and response interceptor
 */
const beforeRequestSuccess = (config) =>
{
    config.headers.Authorization = `Bearer ${store.getters.getToken}`;

    return config;
};

const beforeRequestError = (error) =>
{
    return Promise.reject(error);
};

const onSuccess = (response) =>
{
    return response;
};

const onError = (error) =>
{
    if (error.response) {
        if (error.response.status === 401) {
            if (error.response.data.message === 'Token has expired' ) {
                let lastRequest = error.config;
                store.dispatch('setToken', error.response.data.new_token);
                lastRequest.headers.Authorization = `Bearer ${error.response.data.new_token}`;
                return http(lastRequest);
            }
        } else {
            if (error.response.config.name !== 'admin-login') {
                store.dispatch('setTokenAndLoggedIn', null);
                router.push({ name: 'admin-login' });
            }
        }
    }
    return Promise.reject(error);
};

http.interceptors.request.use(beforeRequestSuccess, beforeRequestError);
http.interceptors.response.use(onSuccess, onError);

/**
 * Change get request
 *
 * @param url
 * @param param
 * @param config
 * @returns {*}
 */
http.get = function(url, param, config) {
    return http({method: 'GET', url: url, params: param, config: config})
};

/**
 * Change delete request
 *
 * @param url
 * @param param
 * @param config
 * @returns {*}
 */
http.delete = function(url, param, config) {
    return http({method: 'DELETE', url: url, params: param, config: config})
};

export default http;
