@extends('layouts.main')

@section('title', 'DronePilot | Обо мне')
@section('description', 'Статьи и записи от личного использования БПЛА')
@section('keywords', 'drone, DJI, Mavic Air')

@section('content')
    <div class="blog-details">
        <article class="post-details" id="post-details">
            <header role="bog-header" class="bog-header text-center">
                <h3><span>20</span> July 2016</h3>
                <h2>{{ $result->name }}</h2>
            </header>
            <figure>
                <img src="/images/blog-images/blog-details-image.jpg" alt="" class="img-responsive"/>
            </figure>
            <div class="enter-content">{{ $result->content }}</div>
        </article>

        <div class="comments-pan">
            <h3>{{ $count_comments }} Comments</h3>
            <ul class="comments-reply">
                @foreach($comments[0] as $obj)
                    <li>
                        <figure>
                            <img src="/images/blog-images/image-1.jpg" alt="" class="img-responsive"/>
                        </figure>
                        <section>
                            <h4>{{ $obj->name }} <a href="#">Reply</a></h4>
                            <div class="date-pan">{{ date('F j, Y', strtotime($obj->created_at)) }}</div>
                            {{ $obj->message }}
                        </section>
                        <ol class="reply-pan">
                            @if(isset($comments[$obj->id]))
                                @foreach($comments[$obj->id] as $item)
                                    <li>
                                        <figure>
                                            <img src="/images/blog-images/image-2.jpg" alt="" class="img-responsive"/>
                                        </figure>
                                        <section>
                                            <h4>{{ $item->name }} <a href="#">Reply</a></h4>
                                            <div class="date-pan">{{ date('F j, Y', strtotime($item->created_at)) }}</div>
                                            {{ $item->message }}
                                        </section>
                                    </li>
                                @endforeach
                            @endif
                        </ol>
                    </li>
                @endforeach
            </ul>

            <div class="commentys-form">
                <h4>Leave a comment</h4>
                <div class="row">
                    <form action="" method="get">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <input name="" type="text" placeholder="Whats your name *">
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <input name="" type="email" placeholder="Whats your email *">
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <input name="" type="url" placeholder="Runing a Website">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <textarea name="" cols="" rows="" placeholder="Whats in your mind"></textarea>
                        </div>
                        <div class="text-center">
                            <input name="" type="button" value="Post Comment">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
