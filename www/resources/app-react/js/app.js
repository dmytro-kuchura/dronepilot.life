import React from 'react';
import ReactDOM from 'react-dom';
import App from './router';
import {AuthProvider} from './context/auth';
import {Provider} from 'react-redux';
import * as action from './store/actions/auth-action'
import store from './store';

store.dispatch(action.authCheck());

if (document.getElementById('app')) {
    ReactDOM.render(
        <Provider store={store}>
            <AuthProvider>
                <App/>
            </AuthProvider>
        </Provider>
        , document.getElementById('app'));
}
