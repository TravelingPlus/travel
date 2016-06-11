@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <style>
                        #map {

                            height: 600px;
                        }
                    </style>


                    <div id="map"></div>
                    <script>
                        function initMap() {
                            var uluru = {lat: -25.363, lng: 131.044};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 4,
                                center: uluru
                            });

                            var contentString = '<div id="content">'+
                                    '<div id="siteNotice">'+
                                    '</div>'+
                                    '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
                                    '<div id="bodyContent">'+
                                    '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
                                    'sandstone rock formation in the southern part of the '+
                                    'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
                                    'south west of the nearest large town, Alice Springs; 450&#160;km '+
                                    '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
                                    'features of the Uluru - Kata Tjuta National Park. Uluru is '+
                                    'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
                                    'Aboriginal people of the area. It has many springs, waterholes, '+
                                    'rock caves and ancient paintings. Uluru is listed as a World '+
                                    'Heritage Site.</p>'+
                                    '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
                                    'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
                                    '(last visited June 22, 2009).</p>'+
                                    '</div>'+
                                    '</div>';

                            var infowindow = new google.maps.InfoWindow({
                                content: contentString
                            });

                            var marker = new google.maps.Marker({
                                position: uluru,
                                map: map,
                                title: 'Uluru (Ayers Rock)'
                            });
                            marker.addListener('click', function() {
                                infowindow.open(map, marker);
                            });

                                map.set('styles', [
                                {
                                    featureType: 'road',
                                    elementType: 'geometry',
                                    stylers: [
                                        { color: '#000000' },
                                        { weight: 1.6 }
                                    ]
                                }, {
                                    featureType: 'road',
                                    elementType: 'labels',
                                    stylers: [
                                        { saturation: -100 },
                                        { invert_lightness: true }
                                    ]
                                }, {
                                    featureType: 'landscape',
                                    elementType: 'geometry',
                                    stylers: [
                                        { hue: '#ffff00' },
                                        { gamma: 1.4 },
                                        { saturation: 82 },
                                        { lightness: 96 }
                                    ]
                                }, {
                                    featureType: 'poi.school',
                                    elementType: 'geometry',
                                    stylers: [
                                        { hue: '#fff700' },
                                        { lightness: -15 },
                                        { saturation: 99 }
                                    ]
                                }
                            ]);

                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
                            async defer></script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
