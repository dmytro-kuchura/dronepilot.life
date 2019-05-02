import {combineReducers} from 'redux';

import blogRecordsReducer from './blog-records-reducer';
import blogCommentsReducer from './blog-comments-reducer';

export default combineReducers({
    blogRecordsState: blogRecordsReducer,
    blogCommentsState: blogCommentsReducer
});
