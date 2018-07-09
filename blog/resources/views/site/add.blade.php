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
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        <button>CREATE</button>
    </form>
</body>

</html>