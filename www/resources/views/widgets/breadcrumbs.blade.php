<div class="banner inner-banner1 ">
    <div class="container">
        <section class="banner-detail center-xs">
            <h1 class="banner-title">Blog</h1>
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
        </section>
    </div>
</div>
