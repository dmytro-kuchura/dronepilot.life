@extends('layouts.main')

@section('title', $result->title ? 'DronePilot | ' . $result->title : 'DronePilot | ' . $result->name)
@section('description', $result->description ? $result->description : '')
@section('keywords', $result->keywords ? $result->keywords : '')

@section('content')
    <div class="blog-details">
        <article class="post-details" id="post-details">
            <header role="bog-header" class="bog-header text-center">
                <h3>{!! date('<\s\p\a\n\>j<\/\s\p\a\n\>F Y', strtotime($result->created_at))  !!}</h3>
                <h2>{{ $result->name }}</h2>
            </header>
            <figure>
                <img src="{{ is_file(public_path('/storage/inner/' . $result->image)) ? '/storage/inner/' . $result->image : '/images/placeholder.png' }}" alt="" class="img-responsive"/>
            </figure>
            <div class="enter-content">{!! $result->content !!}</div>
        </article>

        <div class="comments-pan">
            @if(count($comments))
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
                                                <img src="/images/blog-images/image-2.jpg" alt=""
                                                     class="img-responsive"/>
                                            </figure>
                                            <section>
                                                <h4>{{ $item->name }} <a href="#">Reply</a></h4>
                                                <div
                                                    class="date-pan">{{ date('F j, Y', strtotime($item->created_at)) }}</div>
                                                {{ $item->message }}
                                            </section>
                                        </li>
                                    @endforeach
                                @endif
                            </ol>
                        </li>
                    @endforeach
                </ul>
            @endif

            <div class="comments-form">
                <h4>Оставьте Ваш комменатрий по этому поводу:</h4>
                <div class="row">
                    <form method="post" id="comment-form">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <input name="name" type="text" placeholder="Ваше имя *">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <input name="email" type="email" placeholder="Ваш email *">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <textarea name="message" cols="" rows="" placeholder="Ваши мысли по этому поводу? *"></textarea>
                        </div>
                        <input name="record_id" value="{{ $result->id }}" type="hidden">
                        <div class="text-center">
                            <input type="submit" value="Оставить комментарий">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
