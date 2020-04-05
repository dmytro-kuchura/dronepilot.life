@if(count($result))
    <div class="sidebar-box mb-40"><span class="opener plus"></span>
        <div class="sidebar-title">
            <h3><span>{{ __('site.tags') }}</span></h3>
        </div>
        <div class="sidebar-contant">
            <ul class="tagcloud">
                @foreach($result as $obj)
                    <li><a href="{{ route('blog.tag', ['tag' => $obj->alias]) }}">{{ $obj->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
