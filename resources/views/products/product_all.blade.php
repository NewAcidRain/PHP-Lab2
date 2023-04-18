<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/pagination/paginator.css')}}">
    <link rel="stylesheet" href="{{asset('css/product/products.css')}}">
    <title>Main</title>
</head>
<body>
   <a href="{{route('main')}}"> <img class="back" src="{{asset('storage/icons/house.svg')}}"> </a>
<div class="products-container">
    <h2 class="main-title">Products</h2>
    <div class="main">
    @foreach($products as $product)
            <div class="container">
                <div class="products">
                <a class="link" href="{{route('product.show',$product['symbolic_code'])}}">
                    <div class="title-price">
                        <div class="product title">{{$product['title']}}</div>
                        <div class="product img">
                            @if($product['img'])
                            <img class="pic" style="width: 300px;height: 200px" src="{{asset('storage/img/'.$product['img'])}}">
                            @else
                            <img class="pic" style="width: 100px;height: 200px" src="{{asset('storage/icons/box2.svg')}}">
                            @endif
                        </div>
                        <div class="product price">{{$product['price']}}₽</div>
                    </div>
                </a>
                    <div class="delete-update">
                        <div class="delete">
                            <form action="{{route('product.delete', $product['symbolic_code'])}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn" type="submit"><img class="delete-pic" style="height:30px" src="{{asset('/storage/icons/x.svg')}}"> </button>
                            </form>
                        </div>
                        <div class="update">
                            <a href="{{route('product.update.page', $product['symbolic_code'])}}" class="btn" type="submit"><img class="update-pic" style=" height:20px" src="{{asset('/storage/icons/pencil.svg')}}"></a>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
    <div class="paginator">{{ $products->links()}}</div>
</div>

</body>
</html>
