const axios = require('axios');

export const getBlogRecordsList = () => {
    axios.get('/api/v1/blog/list')
        .then(function (response) {
            return response.data;
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
        .finally(function () {
            // always executed
        });
};
