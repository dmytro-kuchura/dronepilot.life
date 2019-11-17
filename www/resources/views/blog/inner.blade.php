@extends('layouts.main')

@section('title', $result->title ? 'DronePilot | ' . $result->title : 'DronePilot | ' . $result->name)
@section('description', $result->description ? $result->description : '')
@section('keywords', $result->keywords ? $result->keywords : '')

@section('content')
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-12 mb-60">
                            <div class="blog-media mb-20">
                                <img src="{{ is_file(public_path('/storage/inner/' . $result->image)) ? '/storage/inner/' . $result->image : 'https://via.placeholder.com/1300x811.png?text=NO%20IMAGE' }}" alt="{{ $result->name }}">
                            </div>
                            <div class="blog-detail ">
                                <div class="post-info">
                                    <ul>
                                        <li><span
                                                class="post-date">{{ date('j ', strtotime($result->created_at)) . ' ' . russianMonth($result->created_at) . ' ' . date('Y', strtotime($result->created_at)) }}</span>
                                        </li>
                                        <li><span>Автор</span><a href="javascript:void(0)"> Дмитрий Кучура</a></li>
                                    </ul>
                                </div>
                                <div class="blog-title">
                                    <a href="javascript:void(0)">{{ $result->name }}</a>
                                </div>
                                {!! $result->content !!}
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="comments-area-main">
                                @if(count($comments))
                                    <div class="comments-area">
                                        <h4>Комментарии<span>{{ $count_comments }}</span></h4>
                                        @foreach($comments[0] as $obj)
                                            <ul class="comment-list mt-20">
                                                <li>
                                                    <div class="comment-user">
                                                        <img src="/images/avatar-placeholder.svg" alt="{{ $obj->name }}">
                                                    </div>
                                                    <div class="comment-detail">
                                                        <div class="user-name">{{ $obj->name }}</div>
                                                        <div class="post-info">
                                                            <ul>
                                                                <li>{{ date('F j, Y', strtotime($obj->created_at)) }}</li>
                                                            </ul>
                                                        </div>
                                                        <p>{{ $obj->message }}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        @endforeach
                                    </div>
                                @endif

                                <div class="main-form mt-30">
                                    <h4>Оставьте комментарий</h4>
                                    <comments :record="{{ $result->id }}"></comments>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @widget('Sidebar')
            </div>
        </div>


        <div style="display: none;" itemscope itemtype="http://schema.org/Article">
            <p itemprop="name">{{ $result->name }}</p>
            <meta itemprop="headline" content="{{ $result->name }}">
            <p itemprop="articleBody">{{ $result->content }}</p>">
            <meta itemprop="description" content="{{ $result->content }}"/>
            <p itemprop="genre">Техническая</p>
            <p itemprop="author">Дмитрий Кучура</p>
            <p itemprop="datePublished">{{ date('F j, Y', strtotime($result->created_at)) }}</p>
            <p itemprop="publisher">dronepilot.info | Дмитрий Кучура</p>
            <p itemprop="image">{{ is_file(public_path('/storage/inner/' . $result->image)) ? '/storage/inner/' . $result->image : 'https://via.placeholder.com/1300x811.png?text=NO%20IMAGE' }}</p>
        </div>
    </section>
@endsection
