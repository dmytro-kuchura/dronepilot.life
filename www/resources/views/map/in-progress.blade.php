@extends('layouts.main')

@section('title', 'В разработке')
@section('description', 'В разработке')
@section('keywords', 'В разработке')

@section('content')
    <section class="ptb-70 about-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-part align-center mb-30">
                        <h2 class="main_title heading"><span>Информация по данной стране еще в разработке</span></h2>
                    </div>
                    <div class="mb-20">
                        <p>Информация о полетах в данной стране еще собирается, однако можете оставить информацию о том что знате Вы о данной стране</p>
                    </div>
                    <div class="mb-20">
                        @if(config('app.env') !== 'local')
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <ins class="adsbygoogle"
                                 style="display:block; text-align:center;"
                                 data-ad-layout="in-article"
                                 data-ad-format="fluid"
                                 data-ad-client="ca-pub-3428447687354562"
                                 data-ad-slot="4005558967"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        @endif
                    </div>
                </div>
            </div>

            <div class="main-form">
                <contacts></contacts>
            </div>
        </div>
    </section>
@endsection
