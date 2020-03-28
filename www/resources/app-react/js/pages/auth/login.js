import React from 'react';
import {Link, useHistory} from 'react-router-dom';
import {useAuth} from '../../context/auth';
import {login} from '../../api/auth';
import {getIntendedUrl} from '../../utils/auth';
import useInputValue from '../../components/input-value';

function Login() {
    let {setCurrentUser, setToken} = useAuth();
    let history = useHistory();
    let email = useInputValue('email');
    let password = useInputValue('password');

    const handleSubmit = e => {
        e.preventDefault();

        login({
            email: email.value,
            password: password.value
        }).then(({user, token}) => {
            setToken(token);
            setCurrentUser(user);
            history.push(getIntendedUrl());
        }).catch(error => {
            error.json().then(({errors}) => email.parseServerError(errors));
        });
    };

    return (
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div className="container">
                        <div className="row justify-content-center">
                            <div className="col-lg-5">
                                <div className="card shadow-lg border-0 rounded-lg mt-5">
                                    <div className="card-header">
                                        <h3 className="text-center font-weight-light my-4">DronePilot | Авторизация</h3>
                                    </div>
                                    <div className="card-body">
                                        <form onSubmit={handleSubmit} method="POST">
                                            <div className="form-group">
                                                <label className="small mb-1"
                                                       htmlFor="inputEmailAddress">Email</label>
                                                <input
                                                    className="form-control py-4"
                                                    id="email"
                                                    type="email"
                                                    name="email"
                                                    {...email.bind}
                                                    placeholder="Введите Email адрес"/>

                                                {email.error && <p style={{color: 'red'}}>{email.error}</p>}
                                            </div>
                                            <div className="form-group">
                                                <label className="small mb-1"
                                                       htmlFor="inputPassword">Password</label>
                                                <input
                                                    className="form-control py-4"
                                                    id="password"
                                                    name="password"
                                                    type="password"
                                                    {...password.bind}
                                                    placeholder="Введите пароль"/>
                                            </div>
                                            <div className="form-group">
                                                <div className="custom-control custom-checkbox">
                                                    <input className="custom-control-input"
                                                           id="rememberPasswordCheck" type="checkbox"/>
                                                    <label className="custom-control-label"
                                                           htmlFor="rememberPasswordCheck">Запомнить?</label>
                                                </div>
                                            </div>
                                            <div
                                                className="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <Link to="/admin/forgot-password" className="small">Забыли
                                                    пароль?</Link>
                                                <button type="submit" className="btn btn-primary">Авторизация</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div className="card-footer text-center">
                                        <div className="small">
                                            <Link to="/admin/register">Регистрация</Link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    );
}

export default Login;
