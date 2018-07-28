@foreach($users as $user)
    <li>{!! $user['first_name'] !!} {!! $user['second_name'] !!} From:{!! $user['city'] !!}</li>
@endforeach
