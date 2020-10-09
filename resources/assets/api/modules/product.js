import http     from '@utils/http'
import store    from '@store'

export default {
  getProducts() {
    return new Promise((resolve, reject) => {
      http.post('/api/products').then(result => {
        store.dispatch('product/setProducts', result.data.products)
        resolve(result)
      }).catch(error => {
        reject(error)
      })
    })
  },
};
