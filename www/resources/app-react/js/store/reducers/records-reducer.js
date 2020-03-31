import * as ActionTypes from "../action-types";

const record = {
    id: null,
    name: null,
    status: null,
    views: null,
    createdAt: null,
};

const initialState = {
    list: [],
    item: record
};

const Records = (state = initialState, {type, payload = null}) => {
    switch (type) {
        case ActionTypes.BLOG_LIST:
            return applyRecords(state, payload);
        case ActionTypes.BLOG_INNER:
            return applyRecord(state, payload);
        default:
            return state;
    }
};

const applyRecords = (state, payload) => {
    state = Object.assign({}, state, {
        list: payload
    });

    return state;
};

const applyRecord = (state, payload) => {
    state = Object.assign({}, state, {
        item: payload
    });

    return state;
};

export default Records;
