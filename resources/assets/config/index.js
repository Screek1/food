import moment from 'moment';

// Optimized
let defaultConfig = {
	appName: 'Food',
	http: {
		url: Laravel.url,
		defaultRequest: {
			headers: {
				'X-Requested-With': 'XMLHttpRequest',
				'Accept': 'application/json',
				'UTC-Offset': moment().utcOffset(),
				'Access-Control-Allow-Origin': '*',
				'Content-Type': 'application/json',
			}
		}
	},
};

export default defaultConfig;
