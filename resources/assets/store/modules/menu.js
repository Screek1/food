const state = {
  savedMenuName: '',
  savedMenuType: null,
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
  },
  getSavedMenuType(state) {
    return state.savedMenuType;
  }
};

const actions = {
  saveMenu({ commit }, menu) {
    commit('saveMenu', menu);
  },
  resetMenu({ commit }) {
    commit('resetMenu')
  }
};

const mutations = {
  saveMenu(state, menu) {
    state.savedMenu = menu.value;
    state.savedMenuName = menu.name;
    state.savedMenuType = menu.type;
  },
  resetMenu (state) {
    state.savedMenu = {};
    state.savedMenuName = '';
    state.savedMenuType = null;
  }
};

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}
