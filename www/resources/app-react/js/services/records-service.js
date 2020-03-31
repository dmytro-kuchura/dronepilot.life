import * as action from '../store/actions/records-action'
import Http from '../http'

export function getRecordsList() {
    return dispatch => (
        new Promise((resolve, reject) => {
            Http.get('/api/v2/blog')
                .then(response => {
                    dispatch(action.getRecords(response.data.result.data));
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
