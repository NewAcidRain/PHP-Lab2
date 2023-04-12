<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/categories/category_products.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagination/paginator.css')}}">
    <title>Products</title>
</head>
<body>
<div class="category-products">
    @if($categories->products->isEmpty() != 1)
        <div class="sort">
            <form action="{{route('category.sorted',$categories->symbolic_code)}}" method="post">
                @csrf
                <select name="choice">
                    <option value="all">All</option>
                    <option value="cheap">Cheap first</option>
                    <option value="dear">Dear ones first</option>
                </select>
                <input type="submit" value="Sort">
            </form>

            <form action="{{route('category.input.sorted',$categories->symbolic_code)}}" method="post">
                @csrf
                <input type="number" name="from" placeholder="price from">
                <input type="number" name="to" placeholder="price up to">
                <input type="submit" value="Sort">
            </form>
        </div>

        <div class="container">
            <h2>{{$categories->title}}</h2>
            <div class="products-wrap">
                @foreach($products as $product)
                    <a class="product-link" href="{{route('product.show',$product->symbolic_code)}}">
                    <div class="products">
                        <div class="title">{{$product->title}}</div>
                        @if($product->img)
                            <img class="product-pic" src="{{asset($product->img)}}" alt="">
                        @else
                            <img class="product-pic" src="{{asset('/storage/img/icons/box2.svg')}}">
                        @endif
                        <div class="price">{{$product->price}}₽</div>
                    </div>
                    </a>
                @endforeach
            </div>
            @else
                <div class="empty">
                    <h2>Category is empty</h2>
                </div>
@endif
</body>
</html>
