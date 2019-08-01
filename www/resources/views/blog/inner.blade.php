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
                    <div class="row">
                        <div class="col-12">
                            <div class="comments-area-main">
                                @if(count($comments))
                                    <div class="comments-area">
                                        <h4>Комментарии<span>{{ $count_comments }}</span></h4>
                                        @foreach($comments[0] as $obj)
                                            <ul class="comment-list mt-20">
                                                <li>
                                                    <div class="comment-user"><img src="images/comment-user3.jpg"
                                                                                   alt="Roadie"></div>
                                                    <div class="comment-detail">
                                                        <div class="user-name">{{ $obj->name }}</div>
                                                        <div class="post-info">
                                                            <ul>
                                                                <li>{{ date('F j, Y', strtotime($obj->created_at)) }}</li>
                                                            </ul>
                                                        </div>
                                                        <p>{{ $item->message }}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        @endforeach
                                    </div>
                                @endif

                                <div class="main-form mt-30">
                                    <h4>Leave a comments</h4>
                                    <form id="comment-form">
                                        <div class="row mt-30">
                                            <div class="col-md-6 mb-30">
                                                <input type="text" name="name" placeholder="Имя" required>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>
                                            <div class="col-12 mb-30">
                                                <textarea cols="30" name="message" rows="3" placeholder="Комментарий" required></textarea>
                                            </div>
                                            <input name="record_id" value="{{ $result->id }}" type="hidden">
                                            <div class="col-12">
                                                <button class="btn btn-color" name="submit" type="submit">Оставить комментарий
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @widget('Sidebar')
            </div>
        </div>
    </section>
@endsection
