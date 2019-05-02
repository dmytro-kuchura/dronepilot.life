import React from "react";
import ReactDOM from "react-dom";
import {createBrowserHistory} from "history";

import {Provider} from "react-redux";
import configureStore from "./store";

import {Router, Route, Switch, Redirect} from "react-router-dom";

import AdminLayout from "./layouts/Admin/Admin.jsx";

const hist = createBrowserHistory();

ReactDOM.render(
    <Router history={hist}>
        <Provider store={configureStore()}>
            <Switch>
                <Route path="/admin" render={props => <AdminLayout {...props} />}/>
                <Redirect from="/" to="/admin/dashboard"/>
            </Switch>
        </Provider>
    </Router>,
    document.getElementById("app")
);
