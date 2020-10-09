const state = {
  products: [],
};

const getters = {
  getProducts(state) {
    return state.products;
  },
  getProductsForBreakfast(state) {
    return state.products.filter(product => product.meal.find(item => item.value === 'breakfast'))
  },
  getProductsForDinner(state) {
    return state.products.filter(product => product.meal.find(item => item.value === 'dinner'))
  },
  getProductsForSupper(state) {
    return state.products.filter(product => product.meal.find(item => item.value === 'supper'))
  },
  getProductsForSnack(state) {
    return state.products.filter(product => product.meal.find(item => item.value === 'snack'))
  }
};

const actions = {
  setProducts({ commit }, products) {
    commit('setProducts', products);
  },
  addNewProduct({ commit }, product) {
    commit('addNewProduct', product);
  },
  deleteProduct({ commit }, payload) {
    commit('deleteProduct', payload);
  }
};

const mutations = {
  setProducts(state, products) {
    state.products = products;
  },
  addNewProduct (state, product) {
    state.products.push(product);
  },
  deleteProduct (state, payload) {
    state.products = state.products.filter(item => item.id !== payload)
  },
};

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}
