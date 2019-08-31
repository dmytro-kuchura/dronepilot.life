<div class="sidebar-box listing-box mb-40"><span class="opener plus"></span>
    <div class="sidebar-title">
        <h3><span>{{ __('site.categories') }}</span></h3>
    </div>
    <div class="sidebar-contant">
        <ul>
            @foreach($result as $obj)
                <li>
                    <div class="check-box">
                        <span>
                            <a href="{{ route('blog.category', ['category' => $obj->alias]) }}">{{ $obj->name }} <span>({{ $obj->count }})</span></a>
                        </span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
