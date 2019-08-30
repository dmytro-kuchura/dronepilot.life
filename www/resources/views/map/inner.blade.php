@extends('layouts.main')

@section('title', __('seo.map.title'))
@section('description', __('seo.map.description'))
@section('keywords', __('seo.map.keywords'))

@section('content')
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-30">
                    <h3 class="heading-h3">Полеты на дроне в - {{ $result->name }}</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. etiam nec suscipit arcu, feugiat fermentum ex cras nec scelerisque magna, eu dignissim ante. mauris ullamcorper neque sed dapibus scelerisque, vestibulum et auctor odio. Fusce dapibus tortor vel quam venenatis rutrum fusce sagittis mauris nisi, eu vulputate nisl lacinia at. Suspendisse potenti, nulla nisi mi, hendrerit vitae faucibus.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-detail">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-part align-center mb-30">
                                    <h2 class="main_title  heading"><span>Регулируемые правила:</span></h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="image-part center-xs"> <img alt="Roadie" src="https://via.placeholder.com/855x450.png?text=NO%20IMAGE"> </div>
                            </div>
                            <div class="col-12 mt-30">
                                <div class="heading-part-desc align_left center-md">
                                    <h2 class="heading">Nullam vel sollicitudin diam proin congue lacinia tortor vel vulputate morbi et mauris nec risus id at odio.</h2>
                                </div>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos nunc cursus purus sed elit aliquet aliquet luctus pulvivvvvnar tortor, cras malesuada mi gravida, vehiculaue vitae, congue erat, aenean ullamcorper nibh nec sem interdumIt is a long established fact that a reader will by the readable content a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 pt-sm-60">
                    <div class="responsive-part">
                        <div class="row">
                            <div class="col-sm-12 partner-detail-main">
                                <div class="heading-part align-center mb-30">
                                    <h2 class="main_title  heading"><span>Полезное:</span></h2>
                                </div>
                                <p>Nullam vel sollicitudin diam proin congue lacinia tortor vel vulputate morbi et mauris nec risus feugiat malesuada id at odio nulla ornare scelerisque est, nec rutrum arcu elementu.</p>
                            </div>
                            <div class="col-12 mt-30">
                                <div class="heading-part-desc align_left center-md">
                                    <h2 class="heading">Nullam vel sollicitudin diam proin congue lacinia tortor vel vulputate morbi et mauris nec risus id at odio.</h2>
                                </div>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos nunc cursus purus sed elit aliquet aliquet luctus pulvivvvvnar tortor, cras malesuada mi gravida, vehiculaue vitae, congue erat, aenean ullamcorper nibh nec sem interdumIt is a long established fact that a reader will by the readable content a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
