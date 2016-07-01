@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <ui-gmap-google-map center='map.center' zoom='map.zoom'></ui-gmap-google-map>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection
