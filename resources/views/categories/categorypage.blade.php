<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/categories/category.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagination/paginator.css')}}">
    <title>Categories</title>
</head>
<div>
    <a href="{{route('main')}}"><img class="back" src="{{asset('storage/icons/house.svg')}}"></a>
    <div class="categories-container">
        <h2 >Category</h2>
    <div class="categories">
        @foreach($categories as $category)
            <a class="title-link" href="{{route("category.products",$category['symbolic_code'])}}"> <div class="category">
               <div>{{$category['title']}}</div>
                </div></a>
        @endforeach

    </div>
        <div class="paginator">{{ $categories->links()}}</div>
    </div>
</div>
</body>
</html>
