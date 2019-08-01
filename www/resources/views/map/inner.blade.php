@extends('layouts.main')

@section('title', __('seo.map.title'))
@section('description', __('seo.map.description'))
@section('keywords', __('seo.map.keywords'))

@section('content')
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-12 mb-60">
                            <div class="blog-media mb-20">
                                <img src="{{ is_file(public_path('/storage/inner/' . $result->image)) ? '/storage/inner/' . $result->image : '/images/placeholder.png' }}" alt="Roadie">
                            </div>
                            <div class="blog-detail ">
                                <div class="post-info">
                                    <ul>
                                        <li><span
                                                class="post-date">{{ date('j ', strtotime($result->created_at)) . ' ' . russianMonth($result->created_at) . ' ' . date('Y', strtotime($result->created_at)) }}</span>
                                        </li>
                                        <li><span>By</span><a href="javascript:void(0)"> cormon jons</a></li>
                                    </ul>
                                </div>
                                <div class="blog-title"><a href="javascript:void(0)">Combined with a handful of
                                        model</a></div>
                                {!! $result->content !!}
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                @widget('Sidebar')
            </div>
        </div>
    </section>
@endsection
