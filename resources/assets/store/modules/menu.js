const state = {
  typeMenu: null,
  savedMenu: {}
};

const getters = {
  getTypeMenu() {
    return state.typeMenu;
  },
  getSavedMenu(state) {
    return state.savedMenu;
  }
};

const actions = {
  saveMenu({ commit }, menu) {
    commit('saveMenu', menu);
  },
  setTypeMenu({ commit }, menu) {
    commit('setTypeMenu', menu);
  },
};

const mutations = {
  saveMenu(state, menu) {
    state.savedMenu = menu;
  },
  setTypeMenu(state, type) {
    state.typeMenu = type;
  }
};

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}
