<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main/main.css')}}">
    <title>Main</title>
</head>
<body>
    <div class="boxes">
        <div class="box">
            <a class="box-links" href="{{route('products')}}">
            <div class="products">
                <h3 class="title">Products</h3>
                <img class="img" src="{{asset('storage/icons/box-seam.svg')}}">
            </div></a>
            <a class="box-links" href="{{route('category.main')}}">
            <div class="categories">
                <h3 class="title">Categories</h3>
                <img class="img" src="{{asset('storage/icons/list-check.svg')}}">
            </div></a>
        </div>
    </div>
</body>
</html>
