@extends('layouts.main')

@section('title', __('seo.map.title'))
@section('description', __('seo.map.description'))
@section('keywords', __('seo.map.keywords'))

@section('content')
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="about-detail">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-part align-center mb-30">
                                    <h2 class="main_title  heading"><span>Карта полетов на Дроне</span></h2>
                                </div>
                            </div>

                            <div class="col-12 mt-30">
                                <flights></flights>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
