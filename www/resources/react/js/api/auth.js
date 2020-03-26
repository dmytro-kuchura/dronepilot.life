import client from './client';

export const login = ({email, password}) => {
    return client('/api/v3/login', {body: {email, password}})
        .then(({data: user, meta: {token}}) => {
            return {user, token};
        });
};

export const register = ({email, name, password, password_confirmation}) => {
    return client('/api/v3/register', {body: {email, name, password, password_confirmation}}
    ).then(({data: user, meta: {token}}) => {
        return {user, token};
    });
};

export const forgotPassword = ({email}) => {
    return client('/api/v3/password/email', {body: {email}})
        .then(({status}) => status);
};

export const resetPassword = ({token, email, password, password_confirmation}) => {
    return client('/api/v3/password/reset', {body: {token, email, password, password_confirmation}})
        .then(({status}) => status);
};

export const logout = () => {
    return client('/api/v3/logout', {body: {}});
};

export const getUser = () => {
    return client('/api/v3/me')
        .then(({data}) => data)
        .catch(() => null);
};
