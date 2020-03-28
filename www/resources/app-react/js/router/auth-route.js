import React from 'react';
import {Route, Redirect} from 'react-router-dom';
import {setIntendedUrl} from '../utils/auth';
import PropTypes from 'prop-types';
import {useAuth} from '../context/auth';
import AuthNav from '../components/auth-nav';
import Footer from '../components/footer';
import useDocumentTitle from '../components/document-title';
import LeftMenu from "../components/left-menu";

function AuthRoute({component: Component, title, ...rest}) {
    useDocumentTitle(title);
    let {authenticated} = useAuth();

    return (
        <Route
            {...rest}
            render={props => {
                if (!authenticated) {
                    setIntendedUrl(props.location.pathname);
                }

                return authenticated
                    ? (
                        <div>
                            <AuthNav/>
                            <div id="layoutSidenav">
                                <LeftMenu/>
                                <Component {...props} />
                            </div>
                            <Footer/>
                        </div>
                    )
                    : <Redirect to={{pathname: '/admin/login', state: {from: props.location}}}/>;
            }
            }
        />
    );
}

AuthRoute.displayName = 'Auth Route';

AuthRoute.propTypes = {
    component: PropTypes.func.isRequired,
    rest: PropTypes.object,
    location: PropTypes.object,
    title: PropTypes.string
};

export default AuthRoute;
