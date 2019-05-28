@extends('layouts.main')

@section('title', 'DronePilot | Обо мне')
@section('description', 'Статьи и записи от личного использования БПЛА')
@section('keywords', 'drone, DJI, Mavic Air')

@section('content')
    <div class="row">
        <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
            <article role="pge-title-content">
                <header>
                    <h2><span>О чем конкретно</span> на этом сайте</h2>
                </header>
                <p>Все публикации и статьи вместе с материалами. И кто автор этого сайта?</p>
            </article>
        </section>
        <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <article class="about-content">
                <p>
                    Меня зовут Димтрий, увлекаюсь аэросъемкой. Увлекаюсь! Я не считаю себя ни коем образом
                    профисиональным оператором дрона. Но фото и видео с дрона я люблю.
                </p>
                <p>
                    В добавок ко всему стал интересоваться о провозке дрона в другие страны для фото.
                    Имнно по тому и решил все сгрупировать в одном месте. В добавок истории из жизни.
                </p>
                <p>
                    Однако, предоставлю по возможности услуги, аэро и фото съемок. Можно написать через контакты.
                </p>
            </article>
        </section>
        <div class="clearfix"></div>
        <div class="thumbnails-pan">
            <section class="col-xs-12 col-sm-4 col-md-4 col-lg-4 "></section>
            <section class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                <figure>
                    <img src="/images/about-images/about-image.jpg" class="img-responsive"/>
                    <figcaption>
                        <h3>Дмитрий Кучура</h3>
                        <h5>Web - разработчик, автор блога</h5>
                    </figcaption>
                </figure>
            </section>
            <section class="col-xs-12 col-sm-4 col-md-4 col-lg-4 "></section>
        </div>
    </div>
@endsection
