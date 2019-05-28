@extends('layouts.main')

@section('title', 'DronePilot | Контакты')
@section('description', 'Статьи и записи от личного использования БПЛА')
@section('keywords', 'drone, DJI, Mavic Air')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
            <article role="pge-title-content" class="contact-header">
                <header>
                    <h2><span>Здравсвтуйте!</span> связаться можно любым удобным способом.</h2>
                </header>
                <p>
                    <a href="tel:8197654321"><i class="fa fa-phone" aria-hidden="true"></i> +8197654321</a>
                    <a href="help@dronepilot.life"><i class="fa fa-envelope" aria-hidden="true"></i>help@dronepilot.life</a>
                </p>
            </article>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="demo-wrapper">
                <div id="surabaya"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="contat-from-wrapper">
            <div id="message"></div>
            <form method="post" name="cform" id="cform">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <input name="name" id="name" type="text" placeholder="Введите Ваше имя">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <input name="email" id="email" type="email" placeholder="Введите Ваш email">
                    </div>
                </div>
                <div class="clearfix"></div>
                <textarea name="comments" id="comments" cols="" rows=""
                          placeholder="Что именно Вас интересует?"></textarea>
                <div class="clearfix"></div>
                <input name="submit" class="submit" id="submit" type="submit" value="Отправить">
                <div id="simple-msg"></div>
            </form>
        </div>
    </div>
@endsection
