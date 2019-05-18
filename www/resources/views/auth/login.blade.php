@extends('layouts.login')

@section('content')
    <div class="container-fluid no-padding h-100">
        <div class="row flex-row h-100 bg-white">
            <!-- Begin Left Content -->
            <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 col-12 no-padding">
                <div class="elisyam-bg background-03">
                    <div class="elisyam-overlay overlay-08"></div>
                    <div class="authentication-col-content-2 mx-auto text-center">
                        <div class="logo-centered">
                            <a href="{{ route('login') }}">
                                <img src="/images/logo-2.png" alt="logo">
                            </a>
                        </div>
                        <h1>Авторизация</h1>
                        <span class="description">Далее зона особго контроля, представтесь пожалуйста.</span>
                        <ul class="login-nav nav nav-tabs mt-5 justify-content-center" role="tablist" id="animate-tab">
                            <li>
                                <a class="active" data-toggle="tab" href="#singin" role="tab" id="singin-tab"
                                   data-easein="zoomInUp">Авторизация</a></li>
                            <li>
                                <a data-toggle="tab" href="#signup" role="tab" id="signup-tab"
                                   data-easein="zoomInRight">Регистрация</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Left Content -->
            <!-- Begin Right Content -->
            <div class="col-xl-9 col-lg-7 col-md-7 col-sm-12 col-12 my-auto no-padding">
                <!-- Begin Form -->
                <div class="authentication-form-2 mx-auto">
                    <div class="tab-content" id="animate-tab-content">
                        <!-- Begin Sign In -->
                        <div role="tabpanel" class="tab-pane show active" id="singin" aria-labelledby="singin-tab">
                            <h3>Авторизация DronePilot</h3>
                            <form>
                                <div class="group material-input">
                                    <input type="text" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                                <div class="group material-input">
                                    <input type="password" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Password</label>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col text-left">
                                    <div class="styled-checkbox">
                                        <input type="checkbox" name="checkbox" id="remeber">
                                        <label for="remeber">Запомнить меня</label>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <a href="pages-forgot-password.html">Забыт пароль ?</a>
                                </div>
                            </div>
                            <div class="sign-btn text-center">
                                <a href="db-default.html" class="btn btn-lg btn-gradient-01">
                                    Авторизоваться
                                </a>
                            </div>
                        </div>
                        <!-- End Sign In -->
                        <!-- Begin Sign Up -->
                        <div role="tabpanel" class="tab-pane" id="signup" aria-labelledby="signup-tab">
                            <h3>Create An Account</h3>
                            <form>
                                <div class="group material-input">
                                    <input type="text" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                                <div class="group material-input">
                                    <input type="password" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Password</label>
                                </div>
                                <div class="group material-input">
                                    <input type="password" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Confirm Password</label>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col text-left">
                                    <div class="styled-checkbox">
                                        <input type="checkbox" name="checkbox" id="agree">
                                        <label for="agree">I Accept <a href="#">Terms and Conditions</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="sign-btn text-center">
                                <a href="db-default.html" class="btn btn-lg btn-gradient-01">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                        <!-- End Sign Up -->
                    </div>
                </div>
                <!-- End Form -->
            </div>
            <!-- End Right Content -->
        </div>
        <!-- End Row -->
    </div>
@endsection
