export default {
    setToken({ commit, state }, token) {
        commit('setToken', token);
    },
    setLoggedIn({ commit }, loggedIn) {
        commit('setLoggedIn', loggedIn);
    },
    setTokenAndLoggedIn({ commit, state }, token) {
        commit('setToken', token);
        commit('setLoggedIn', Boolean(token));
    },
};
