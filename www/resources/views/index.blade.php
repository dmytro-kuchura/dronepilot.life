@extends('layouts.main')

@section('title', __('seo.index.title'))
@section('description', __('seo.index.description'))
@section('keywords', __('seo.index.keywords'))

@section('content')
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-xl-80per">
                    <div class="blog-listing">
                        <div class="row">

                            @foreach ($result as $item)
                                @if (isset($item->alias))
                                    <div class="col-xl-6 col-12">
                                        <div class="blog-item">
                                            <div class="blog-media mb-20">
                                                <img
                                                    src="{{ is_file(public_path('/storage/main/' . $item->image)) ? '/storage/main/' . $item->image : 'https://via.placeholder.com/1300x811.png?text=NO%20IMAGE' }}"
                                                    alt="{{ $item->name }}">
                                                <div class="blog-effect"></div>
                                                <a href="{{ route('blog.inner', ['alias' => $item->alias]) }}"
                                                   title="Click For Read More" class="read">&nbsp;</a>
                                            </div>
                                            <div class="blog-detail">
                                                <span
                                                    class="post-date">{{ date('j', strtotime($item->created_at)) . ' ' . russianMonth($item->created_at) . ' ' . date('Y', strtotime($item->created_at))}}</span>
                                                <div class="blog-title"><a
                                                        href="{{ route('blog.inner', ['alias' => $item->alias]) }}">{{ $item->name }}</a>
                                                </div>
                                                <p>{{ $item->short }}</p>
                                                <hr>
                                                <div class="post-info">
                                                    <ul>
                                                        <li><span>{{ __('site.by') }}</span><a href="{{ route('about') }}"> Дмитрий Кучура</a></li>
                                                        <li><a href="{{ route('blog.inner', ['alias' => $item->alias]) }}">({{ $item->comments }}) комментариев</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
                @widget('Sidebar')
            </div>
        </div>
    </section>
@endsection
