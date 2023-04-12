<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/product/current_show.css')}}">
    <title> {{$code->title}} </title>
</head>
<body>
<div class="product-container">
    <div class="img-container">
        <div class="title">{{$code->title}}</div>
    @if($code->img)
        <div class="img-price-block">
            <div class="img"><img class="img-pic active" style="width: 300px" src="{{asset('storage/'.$code->img)}}"></div>
            <div class="price-quantity-block">
                <div class="price">{{$code->price}}₽</div>
                <div class="quantity">Remaining in stock: {{$code->quantity}}</div>
                <div class="creation_date">{{$code->creation_date}}</div>
            </div>
        </div>
        @else
        <div class="img-price-block">
            <div class="img"><img class="img-pic" style="width: 300px;height: 500px" src="{{asset('storage/icons/box2.svg')}}"></div>
            <div class="img"><img class="img-pic" style="width: 300px;height: 500px" src="{{asset('storage/icons/box2.svg')}}"></div>
            <div class="price-quantity-block">
                <div class="price">{{$code->price}}₽</div>
                <div class="quantity">Remaining in stock: {{$code->quantity}}</div>
            </div>
        </div>
        @endif
        <div class="desc-creation-date">
            <div class="description">{{$code->description}}</div>
            <div class="creation_date">{{$code->creation_date}}</div>
        </div>

    </div>
</div>
</body>
</html>
