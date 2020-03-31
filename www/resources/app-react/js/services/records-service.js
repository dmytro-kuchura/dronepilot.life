import * as action from '../store/actions/records-action'
import Http from '../http'

export function getRecordsList(page) {
    let link = '/api/v2/blog';

    if (page > 1) {
        link = '/api/v2/blog?page=' + page;
    }

    return dispatch => (
        new Promise((resolve, reject) => {
            Http.get(link)
                .then(response => {
                    dispatch(action.getRecords(response.data.result));
                    return resolve();
                })
                .catch(err => {
                    const statusCode = err.response.status;
                    const data = {
                        error: null,
                        statusCode,
                    };
                    return reject(data);
                })
        })
    );
}
