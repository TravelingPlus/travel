<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="{{url('/home/add')}}" method="post" enctype="multioart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="POST">
        email
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        first_name
        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}">
        last_name
        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}">
        patronymic
        <input type="text" name="patronymic" id="patronymic" value="{{ old('patronymic') }}">
        nationality
        <input type="text" name="nationality" id="nationality" value="{{ old('nationality') }}">
        visa
        <p>
            <input type="checkbox" name="visa" id="visa" value="NO">No<Br>
            <input type="checkbox" name="visa" id="visa" value="YES">Yes<Br>
        </p>
        sex
        <p>
            <input type="checkbox" name="sex" id="sex" value="M">Man<Br>
            <input type="checkbox" name="sex" id="sex" value="F">not man)))<Br>
        </p>

        <input type="date" name="birthday" id="birthday" max="now">

        <button>CREATE</button>
    </form>
</body>

</html>