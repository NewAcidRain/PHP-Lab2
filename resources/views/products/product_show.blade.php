<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{$code->title}} </title>
</head>
<body>
<div class="product-container">
    <div class="symbolic_code">{{$code->symbolic_code}}</div>
    <div class="title">{{$code->title}}</div>
    <div class="description">{{$code->description}}</div>
    <div class="img"><img style="width: 300px" src="{{asset('img/'.$code->img)}}"></div>
    <div class="creation_date">{{$code->creation_date}}</div>
</div>
</body>
</html>
