@extends('layouts.app')

@section('content')
    <div class="expanded row row1">
        <div class="small-1 medium-1 large-1 columns text-center">лого</div>
        <div class="small-1 medium-1 large-3 columns text-center">
            <input type="text">
        </div>
        <div class="small-1 medium-1 large-1 columns text-center">от</div>
        <div class="small-1 medium-1 large-3 columns text-center">
            <input type="text">
        </div>
        <div class="small-1 medium-1 large-1 columns text-center">лицо</div>
        <div class="small-1 medium-1 large-1 columns text-center">домой</div>
        <div class="small-1 medium-1 large-1 columns text-center">маршрут</div>
        <div class="small-1 medium-1 large-1 columns text-center">круг</div>
    </div>
    <div class="expanded row row2">
        <div class="small-1 medium-1 large-1 columns absolute1 padding-top background">
            <div class="padding border margin"><img src="images/punkt.png"></div>
            <div class="padding border margin"><img src="images/bed.png"></div>
            <div class="padding border margin"><img src="images/clubs.png"></div>
            <div class="padding border margin"><img src="images/museum.png"></div>
            <div class="padding border margin"><img src="images/food.png"></div>
            <div class="padding border margin"><img src="images/views.png"></div>
        </div>
        <div class="small-1 madium-1 large-12 columns text-center">

            <div id="map_canvas" ng-controller="mainCtrl">
                <ui-gmap-google-map center="map.center" zoom="map.zoom" draggable="true" options="options" bounds="map.bounds">
                    <ui-gmap-polyline ng-repeat="p in polylines" path="p.path" stroke="p.stroke" visible='p.visible'
                                      geodesic='p.geodesic' fit="false" editable="p.editable" draggable="p.draggable" icons='p.icons'></ui-gmap-polyline>
                </ui-gmap-google-map>
            </div>

        </div>
        <div class="small-1 madium-1 large-1 columns absolute2 padding-top background">
            <div class="padding border margin"><img src="images/planes.png"></div>
            <div class="padding border margin"><img src="images/train.png"></div>
            <div class="padding border margin"><img src="images/bus.png"></div>
            <div class="padding border margin"><img src="images/car.png"></div>
            <div class="padding border margin"><img src="images/feet.png"></div>
            <div class="padding border margin"><img src="images/bike.png"></div>
        </div>
    </div>
    <div class="expanded row rowmenu">
        <div class="row3">
            <div class="small-1 madium-1 large-2 columns text-center">Меню 1</div>
            <div class="small-1 madium-1 large-2 columns text-center">Меню 2</div>
            <div class="small-1 madium-1 large-2 columns text-center">Меню 3</div>
            <div class="small-1 madium-1 large-2 columns text-center">Меню 4</div>
            <div class="small-1 madium-1 large-2 columns text-center">Меню 5</div>
            <div class="small-1 madium-1 large-2 columns text-center">Меню 6</div>
        </div>
    </div>
    <div class="expanded row row5">
        <div class="row3">
            <div class="message">
                <div>
                    <img src="dsfhdh">
                    <img src="">
                    <span>name</span>
                    <span>city</span>
                </div>
                <div class="inputmessage">input</div>
                <div class="buttons">
                    <span>point</span>
                    <span>museum</span>
                    <span>foto</span>
                    <button>Public</button>
                </div>
            </div>
        </div>
    </div>
@stop