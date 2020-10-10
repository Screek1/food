import createLogger from 'vuex/dist/logger'
import createPersistedState from 'vuex-persistedstate'


/**
 * List of mutations that need to be stored in localStorage
 *
 * @type {string[]}
 */
const mutations = [];

/**
 * List of state variables that will be stored in localStorage
 *
 * @type {string[]}
 */
const paths = [
	'token',
	'loggedIn',
	'menu.savedMenu',
	'menu.typeMenu',
	'menu.savedMenuName'
];

/**
 * List enabled plugins
 *
 * @type {Array}
 */
const plugins = [];

/**
 * When logging in from another user, disable synchronization from the locale storage
 */
if (!localStorage.getItem('memberToken')) {
	plugins.push(createPersistedState({
		paths: paths,
		filter: mutation => (mutations.indexOf(mutation.type) === -1), // Boolean
	}));
}

export default plugins
