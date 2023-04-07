<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/paginator.css')}}">
    <title>Main</title>
</head>
<body>
@foreach($products as $product)
    <div class="products">
        <div class="product symbolic-code"><a href="{{route('product.show',$product['symbolic_code'])}}">{{$product['symbolic_code']}}</a></div>
        <div class="product title">{{$product['title']}}</div>
        <div class="product description">{{$product['description']}}</div>
        <div class="product img"><img style="width: 300px" src="{{asset('img/'.$product['img'])}}"></div>
        <div class="product creation-date">{{$product['creation_date']}}</div>
    </div><br>
    <div class="category">
        <div>Category:</div>
        <div class="category category_title">ID: {{$product->category->id}}</div>
        <div class="category category_title">Title: {{$product->category->title}}</div>
    </div><br>
@endforeach
<div class="paginator">
    {{ $products->links()}}
</div>
</body>
</html>
