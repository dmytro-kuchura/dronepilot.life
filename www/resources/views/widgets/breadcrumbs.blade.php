<div class="banner inner-banner1 ">
    <div class="container">
        <section class="banner-detail center-xs">
            <h1 class="banner-title">{{ $page }}</h1>
            @if(!empty($breadcrumbs))
            <div class="bread-crumb right-side float-none-xs">
                <ul>
                    @foreach($breadcrumbs as $bread)
                        @if(isset($bread['link']))
                            <li><a href="{{ $bread['link'] }}">{{ $bread['label'] }}</a>/</li>
                        @else
                            <li><span>{{ $bread['label'] }}</span></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            @endif
        </section>
    </div>
</div>
