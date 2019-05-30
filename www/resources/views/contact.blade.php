@extends('layouts.main')

@section('title', 'DronePilot | Контакты')
@section('description', 'Статьи и записи от личного использования БПЛА')
@section('keywords', 'drone, DJI, Mavic Air')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
            <article role="pge-title-content" class="contact-header">
                <header>
                    <h2><span>Свяжитесь</span> любым удобным способом.</h2>
                </header>
                <p>
                    <a href="tg://resolve?domain=fee1good_ua"><i class="fa fa-phone" aria-hidden="true"></i> fee1good_ua</a>
                    <a href="mailto:contact@dronepilot.life"><i class="fa fa-envelope" aria-hidden="true"></i>contact@dronepilot.life</a>
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
            <form id="contacts-form">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <input name="name" type="text" placeholder="Введите Ваше имя">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <input name="email" type="email" placeholder="Введите Ваш email">
                    </div>
                </div>
                <div class="clearfix"></div>
                <textarea name="description" cols="" rows=""
                          placeholder="Что именно Вас интересует?"></textarea>
                <div class="clearfix"></div>
                <input name="submit" class="submit" type="submit" value="Отправить">
            </form>
        </div>
    </div>
@endsection
