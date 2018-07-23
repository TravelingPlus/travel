@foreach(  $exemlarDateTrips as $element)
    <h1>{{  $element->email }}</h1>
    <h1>{{  $element->city_of_departure }}</h1>
    <h1>{{  $element->city_of_arrival }}</h1>
    <h1>{{  $element->hotel }}</h1>
    <h1>{{  $element->transfer }}</h1>
@endforeach
