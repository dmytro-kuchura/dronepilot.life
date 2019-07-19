@extends('layouts.main')

@section('title', __('seo.about.title'))
@section('description', __('seo.about.description'))
@section('keywords', __('seo.about.keywords'))

@section('content')
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-detail">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-part align-center mb-30">
                                    <h2 class="main_title  heading"><span>Who We Are</span></h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="image-part center-xs"> <img alt="Roadie" src="images/about-sub-3.jpg"> </div>
                            </div>
                            <div class="col-12 mt-30">
                                <div class="heading-part-desc align_left center-md">
                                    <h2 class="heading">Все публикации и статьи вместе с материалами. И кто автор этого сайта?</h2>
                                </div>

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

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 pt-sm-60">
                    <div class="responsive-part">
                        <div class="row">
                            <div class="col-sm-12 partner-detail-main">
                                <div class="heading-part align-center mb-30">
                                    <h2 class="main_title  heading"><span>Our Partners</span></h2>
                                </div>
                                <p>Nullam vel sollicitudin diam proin congue lacinia tortor vel vulputate morbi et mauris nec risus feugiat malesuada id at odio nulla ornare scelerisque est, nec rutrum arcu elementu.</p>
                            </div>
                            <div class="col-sm-12">
                                <div class="partner-block light-gray-bg">
                                    <ul>
                                        <li><span><img src="images/brand1.png" alt="Roadie"></span></li>
                                        <li><span><img src="images/brand2.png" alt="Roadie"></span></li>
                                        <li><span><img src="images/brand3.png" alt="Roadie"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
