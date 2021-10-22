import axios from 'axios';

const axiosConfig = axios.create({
	headers: {
	'Content-type': 'application/json',
    HTTP_X_REQUESTED_WITH: 'XMLHttpRequest',
},
baseURL: 'https://www.cdfnew.tk',
});

export default axiosConfig;
