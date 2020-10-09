import http     from '@utils/http'
import store    from '@store'

export default {
  createProduct(product) {
    return new Promise((resolve, reject) => {
      http.post('/api/admin/products/create', product).then(result => {
        store.dispatch('product/addNewProduct', result.data.product)
        resolve(result)
      }).catch(error => {
        reject(error)
      })
    })
  },
  destroyProduct(id) {
    return new Promise((resolve, reject) => {
      http.post('/api/admin/products/destroy', {id: id}).then(result => {
        store.dispatch('product/deleteProduct', id)
        resolve(result)
      }).catch(error => {
        reject(error)
      })
    })
  }
};
