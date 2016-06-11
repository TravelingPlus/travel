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
                            var mapDiv = document.getElementById('map');
                            var map = new google.maps.Map(mapDiv, {
                                center: {lat: 44.540, lng: -78.546},
                                zoom: 8
                            });
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
