import * as ActionTypes from "../action-types";
import Http from '../../http'

const record = {
    id: null,
    name: null,
    status: null,
    views: null,
    createdAt: null,
};

const initialState = {
    record
};

const Blog = (state = initialState, {type, payload = null}) => {
    switch (type) {
        case ActionTypes.BLOG_LIST:
            return authLogin(state, payload);
        case ActionTypes.AUTH_CHECK:
            return checkAuth(state);
        case ActionTypes.AUTH_LOGOUT:
            return logout(state);
        default:
            return state;
    }
};


const authLogin = (state, payload) => {
    const jwtToken = payload.token;
    const user = payload.user;
    if (!!payload.is_admin) {
        localStorage.setItem('is_admin', true);
    } else {
        localStorage.setItem('is_admin', false);
    }
    localStorage.setItem('jwt_token', jwtToken);
    Http.defaults.headers.common['Authorization'] = `Bearer ${jwtToken}`;
    state = Object.assign({}, state, {
        isAuthenticated: true,
        isAdmin: localStorage.getItem('is_admin') === 'true',
        user
    });
    return state;

};
