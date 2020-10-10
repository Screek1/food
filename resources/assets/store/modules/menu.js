const state = {
  typeMenu: null,
  savedMenuName: '',
  savedMenu: {}
};

const getters = {
  getTypeMenu() {
    return state.typeMenu;
  },
  getSavedMenu(state) {
    return state.savedMenu;
  },
  getSavedMenuName(state) {
    return state.savedMenuName;
  }
};

const actions = {
  saveMenu({ commit }, menu) {
    commit('saveMenu', menu);
  },
  setTypeMenu({ commit }, menu) {
    commit('setTypeMenu', menu);
  },
  resetMenu({ commit }) {
    commit('resetMenu')
  }
};

const mutations = {
  saveMenu(state, menu) {
    state.savedMenu = menu.value;
    state.savedMenuName = menu.name;
  },
  setTypeMenu(state, type) {
    state.typeMenu = type;
  },
  resetMenu (state) {
    state.savedMenu = {};
    state.savedMenuName = '';
  }
};

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}
