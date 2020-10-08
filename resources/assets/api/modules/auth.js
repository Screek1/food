import http     from '@utils/http'
import store    from '@store'

export default {
  authorization(form) {
    return new Promise((resolve, reject) => {
      http.post('/api/login', form).then(result => {
        store.dispatch('setTokenAndLoggedIn', result.data.access_token);
        resolve(result);
      }).catch(error => {
        reject(error)
      })
    })
  },
  refresh() {
    return new Promise((resolve, reject) => {
      http.post('/api/refresh').then(result => {
        store.dispatch('setTokenAndLoggedIn', result.data.access_token);
      }).catch(error => {
        reject(error)
      })
    })
  },
  logout() {
    return new Promise((resolve, reject) => {
      http.post('/api/logout').then(result => {
        store.dispatch('setTokenAndLoggedIn', null);
        resolve(result)
      }).catch(error => {
        reject(error)
      })
    })
  },
};
