<div class="sidebar-box sidebar-item sidebar-item-wide"><span class="opener plus"></span>
    <div class="sidebar-title">
        <h3><span>{{ __('site.popular') }}</span></h3>
    </div>
    <div class="sidebar-contant">
        <ul>
            @foreach($recent as $obj)
                @if (isset($obj->alias))
                    <li>
                        <div class="pro-media">
                            <a href="{{ route('blog.inner', ['alias' => $obj->alias]) }}">
                                <img alt="{{ $obj->name }}"
                                     src="{{ is_file(public_path('/storage/main/' . $obj->image)) ? '/storage/main/' . $obj->image : 'https://via.placeholder.com/1300x811.png?text=NO%20IMAGE' }}">
                            </a>
                        </div>
                        <div class="pro-detail-info">
                            <a href="{{ route('blog.inner', ['alias' => $obj->alias]) }}">{{ $obj->name }}</a>
                            <div
                                class="post-info">{{ date('j', strtotime($obj->created_at)) . ' ' . russianMonth($obj->created_at) . ', ' . date('Y', strtotime($obj->created_at))}}</div>
                        </div>
                    </li>@endif
            @endforeach

        </ul>
    </div>
</div>
