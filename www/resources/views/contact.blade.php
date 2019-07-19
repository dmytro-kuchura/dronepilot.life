@extends('layouts.main')

@section('title', __('seo.contacts.title'))
@section('description', __('seo.contacts.description'))
@section('keywords', __('seo.contacts.keywords'))

@section('content')
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="map">
                        <div class="map-part">
                            <div id="map" class="map-inner-part"></div>
                        </div>
                        <script type="text/javascript"
                                src="http://maps.google.com/maps/api/js?key=AIzaSyC_G1wZMKrwyHHOteMdVwCy82Qm4Pp7vyI&callback=initMap"></script>
                        <script type="text/javascript">
                            // When the window has finished loading create our google map below
                            google.maps.event.addDomListener(window, 'load', init);

                            function init() {
                                // Basic options for a simple Google Map
                                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions

                                var mapOptions = {
                                    // How zoomed in you want the map to start at (always required)
                                    zoom: 12,
                                    scrollwheel: false,

                                    // The latitude and longitude to center the map (always required)
                                    center: new google.maps.LatLng(50.4212961, 30.5587025), // New York

                                    // How you would like to style the map.
                                    // This is where you would paste any style found on Snazzy Maps.
                                    styles: [{
                                        "featureType": "all",
                                        "elementType": "labels.text.fill",
                                        "stylers": [{"saturation": 36}, {"color": "#666666"}, {"lightness": 40}]
                                    }, {
                                        "featureType": "all",
                                        "elementType": "labels.text.stroke",
                                        "stylers": [{"visibility": "on"}, {"color": "#000000"}, {"lightness": 16}]
                                    }, {
                                        "featureType": "all",
                                        "elementType": "labels.icon",
                                        "stylers": [{"visibility": "off"}]
                                    }, {
                                        "featureType": "administrative",
                                        "elementType": "geometry.fill",
                                        "stylers": [{"color": "#000000"}, {"lightness": 20}]
                                    }, {
                                        "featureType": "administrative",
                                        "elementType": "geometry.stroke",
                                        "stylers": [{"color": "#000000"}, {"lightness": 17}, {"weight": 1.2}]
                                    }, {
                                        "featureType": "landscape",
                                        "elementType": "geometry",
                                        "stylers": [{"color": "#000000"}, {"lightness": 20}]
                                    }, {
                                        "featureType": "poi",
                                        "elementType": "geometry",
                                        "stylers": [{"color": "#000000"}, {"lightness": 21}]
                                    }, {
                                        "featureType": "road.highway",
                                        "elementType": "geometry.fill",
                                        "stylers": [{"color": "#000000"}, {"lightness": 17}]
                                    }, {
                                        "featureType": "road.highway",
                                        "elementType": "geometry.stroke",
                                        "stylers": [{"color": "#666666"}, {"lightness": 100}, {"weight": 0.2}]
                                    }, {
                                        "featureType": "road.arterial",
                                        "elementType": "geometry",
                                        "stylers": [{"color": "#000000"}, {"lightness": 18}]
                                    }, {
                                        "featureType": "road.local",
                                        "elementType": "geometry",
                                        "stylers": [{"color": "#000000"}, {"lightness": 16}]
                                    }, {
                                        "featureType": "transit",
                                        "elementType": "geometry",
                                        "stylers": [{"color": "#000000"}, {"lightness": 19}]
                                    }, {
                                        "featureType": "water",
                                        "elementType": "geometry",
                                        "stylers": [{"color": "#000000"}, {"lightness": 17}]
                                    }]
                                };

                                // Get the HTML DOM element that will contain your map
                                // We are using a div with id="map" seen below in the <body>
                                var mapElement = document.getElementById('map');

                                // Create the Google Map using our element and options defined above
                                var map = new google.maps.Map(mapElement, mapOptions);

                                // Let's also add a marker while we're at it

                                var marker = new google.maps.Marker({
                                    map: map,
                                    position: new google.maps.LatLng(50.4212961, 30.5587025)
                                });
                                infowindow = new google.maps.InfoWindow({content: "<b>Ukraine</b><br/>Kyiv"});
                                google.maps.event.addListener(marker, "click", function () {
                                    infowindow.open(map, marker);
                                });
                                infowindow.open(map, marker);
                            }

                            google.maps.event.addDomListener(window, 'load', init_map);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-part align-center mb-30">
                        <h2 class="main_title  heading"><span>Оставьте сообщение!</span></h2>
                    </div>
                </div>
            </div>
            <div class="main-form">
                <form id="contacts-form" name="contactform">
                    <div class="row">
                        <div class="col-md-6 mb-30">
                            <input type="text" required placeholder="Введите Ваше имя" name="name">
                        </div>
                        <div class="col-md-6 mb-30">
                            <input type="email" required placeholder="Введите Ваш email" name="email">
                        </div>
                        <div class="col-12 mb-30">
                                <textarea required placeholder="Что именно Вас интересует?" rows="3" cols="30"
                                          name="description"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="align-center">
                                <button id="submit-contacts" type="submit" name="submit" class="btn btn-color">
                                    Отправить
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
