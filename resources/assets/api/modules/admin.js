import http     from '@utils/http'
import store    from '@store'

export default {
  authorization(form) {
    return new Promise((resolve, reject) => {
      http.post('/api/admin/login', form).then(result => {
        store.dispatch('setTokenAndLoggedIn', result.data.token);
        resolve(result);
      }).catch(error => {
        reject(error)
      })
    })
  },
  logout() {
    return new Promise((resolve, reject) => {
      http.post('/api/admin/logout').then(result => {
        store.dispatch('setTokenAndLoggedIn', null);
        resolve(result)
      }).catch(error => {
        reject(error)
      })
    })
  }
};
