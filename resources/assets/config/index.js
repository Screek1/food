import moment from 'moment';

// Optimized
let defaultConfig = {
	appName: 'Food',
	http: {
		url: 'http://food.loc',
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

export const routeConfig = {
	filter: 'Filter',
	board: 'board',
	deadline: 'Deadline',
	deadlineDay: 'day',
	deadlineWeek: 'week',
};

export default defaultConfig;
