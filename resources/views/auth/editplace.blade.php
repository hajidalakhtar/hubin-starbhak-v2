<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
  @foreach ($ListKunjin as $data )
    {{$data->id}}
  @endforeach

</body>

</html>
