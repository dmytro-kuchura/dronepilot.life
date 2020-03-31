import * as ActionTypes from "../action-types";

export function getRecords(payload) {
    return {
        type: ActionTypes.BLOG_LIST,
        payload
    }
}

export function getRecordInner() {
    return {
        type: ActionTypes.BLOG_INNER
    }
}
