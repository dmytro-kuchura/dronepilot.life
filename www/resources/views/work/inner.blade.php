@extends('layouts.main')

@section('title', $result->title ? 'DronePilot | ' . $result->title : 'DronePilot | ' . $result->name)
@section('description', $result->description ? $result->description : '')
@section('keywords', $result->keywords ? $result->keywords : '')

@section('content')
    <div class="work-details">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <header role="work-title">
                    <h2>{{ $result->name }}</h2>
                    <a href="#">Visit online <i class="fa fa-external-link" aria-hidden="true"></i></a>
                </header>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8">
                <section>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat eu nibh ultricies semper. Vivamus porta, felis vitae facilisis sodales, felis est iaculis orci, et ornare sem mauris ut turpis. Pellentesque vitae tortor nec tellus hendrerit aliquam. Donec condimentum leo eu ull pellentesque urna rhoncus.</p>
                    <p>elis est iaculis orci, et ornare sem mauris ut turpis. Pellentesque vitae tortor nec tellus hendrerit aliquam. Donec condimentum leo eu ullamcorper scelerisque pellentes rhoncus.</p>
                    <p><strong>Role</strong><br/>
                        Branding, Identity, Web Design, UX / UI</p>
                </section>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="work-images grid">
            <ul class="grid-lod effect-2" id="grid">
                <li><img src="images/work/works-image-1.jpg" alt="" class="img-responsive"/></li>
                <li><img src="images/work/works-image-2.jpg" alt="" class="img-responsive"/></li>
                <li><img src="images/work/works-image-3.jpg" alt="" class="img-responsive"/></li>
            </ul>
        </div>
    </div>
@endsection
