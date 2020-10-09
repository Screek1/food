import http     from '@utils/http'
import store    from '@store'

export default {
  createMenu(type, menu) {
    return new Promise((resolve, reject) => {
      http.post('/api/menu/create', {type: type, menu: JSON.stringify(menu)}).then(result => {
        resolve(result);
      }).catch(error => {
        reject(error)
      })
    })
  },
  getMenu(key) {
    return new Promise((resolve, reject) => {
      http.post('/api/menu', {key: key}).then(result => {
        resolve(result)
      }).catch(error => {
        reject(error)
      })
    })
  }
};
