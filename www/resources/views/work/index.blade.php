@extends('layouts.main')

@section('title', 'DronePilot | Обо мне')
@section('description', 'Статьи и записи от личного использования БПЛА')
@section('keywords', 'drone, DJI, Mavic Air')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
            <article role="pge-title-content" class="blog-header">
                <header>
                    <h2><span>News</span> Updates from studio</h2>
                </header>
                <p>Get all information about our studio from latest news posts & updates page.</p>
            </article>
            <ul class="grid-lod effect-2" id="grid">
                @foreach ($left as $item)
                    @if (isset($item->alias))
                        <li>
                            <section class="blog-content">
                                <a href="{{ route('blog.inner', ['alias' => $item->alias]) }}">
                                    <figure>
                                        <div class="post-date">
                                            {!! date('<\s\p\a\n\>j<\/\s\p\a\n\>F Y', strtotime($item->created_at))  !!}
                                        </div>
                                        <img src="images/blog-images/blog-2.jpg" alt="" class="img-responsive"/>
                                    </figure>
                                </a>
                                <article>{{ $item->name }}</article>
                            </section>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <ul class="grid-lod effect-2" id="grid">
                @foreach ($right as $item)
                    @if (isset($item->alias))
                        <li>
                            <section class="blog-content">
                                <a href="{{ route('blog.inner', ['alias' => $item->alias]) }}">
                                    <figure>
                                        <div class="post-date">
                                            {!! date('<\s\p\a\n\>j<\/\s\p\a\n\>F Y', strtotime($item->created_at))  !!}
                                        </div>
                                        <img src="images/blog-images/blog-1.jpg" alt="" class="img-responsive"/>
                                    </figure>
                                </a>
                                <article>{{ $item->name }}</article>
                            </section>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@endsection
