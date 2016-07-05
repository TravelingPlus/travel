@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <div id="map_canvas" ng-controller="mainCtrl">
                        <ui-gmap-google-map center="map.center" zoom="map.zoom" draggable="true" options="options" bounds="map.bounds">
                            <ui-gmap-polyline ng-repeat="p in polylines" path="p.path" stroke="p.stroke" visible='p.visible'
                                              geodesic='p.geodesic' fit="false" editable="p.editable" draggable="p.draggable" icons='p.icons'></ui-gmap-polyline>
                        </ui-gmap-google-map>
                    </div>

                </div>
            </div>
        </div>



    </div>
</div>
@endsection
