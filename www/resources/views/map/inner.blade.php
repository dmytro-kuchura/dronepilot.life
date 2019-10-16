@extends('layouts.main')

@section('title', $result->title)
@section('description', $result->description)
@section('keywords', $result->keywords)

@section('content')
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-30">
                    <h3 class="heading-h3">{{ $result->name }}</h3>
                    <p>{!! $result->content !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-detail">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-part align-center mb-30">
                                    <h2 class="main_title  heading"><span>Регулируемые правила:</span></h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="image-part center-xs">
                                    <img alt="{{ $result->name }}"
                                         src="{{ is_file(public_path('/storage/inner/' . $result->image)) ? '/storage/inner/' . $result->image : 'https://via.placeholder.com/1300x811.png?text=NO%20IMAGE' }}">
                                </div>
                            </div>
                            <div class="col-12 mt-30">
                                <p>{!! $result->rules !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 pt-sm-60">
                    <div class="responsive-part">
                        <div class="row">
                            <div class="col-sm-12 partner-detail-main">
                                <div class="heading-part align-center mb-30">
                                    <h2 class="main_title  heading"><span>Полезное:</span></h2>
                                </div>
                            </div>
                            <div class="col-12 mt-30">
                                <div class="heading-part-desc align_left center-md">
                                    <h2 class="heading">Дополнительные ссылки и полезная информация</h2>
                                </div>
                                <p>{!!  $result->other !!}</p>

                                @if(config('app.env') !== 'local')
                                    <script async
                                            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                    <ins class="adsbygoogle"
                                         style="display:block; text-align:center;"
                                         data-ad-layout="in-article"
                                         data-ad-format="fluid"
                                         data-ad-client="ca-pub-3428447687354562"
                                         data-ad-slot="3016729167"></ins>
                                    <script>
                                        (adsbygoogle = window.adsbygoogle || []).push({});
                                    </script>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
