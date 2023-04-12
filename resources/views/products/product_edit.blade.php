<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/product/edit.css')}}">
    <title>Update</title>
</head>
<body>
<div class="main-block">
    <div class="border">
    <div class="box">
        <form method="post" enctype="multipart/form-data" action="{{route('product.update',$code->symbolic_code)}}">
            @csrf
            @method('put')
        <div class="content">
        <div class="container title-container">
            <label for="title">Title: <input class="input-fields title" name="title" id="title" value="{{$code->title}}" type="text" placeholder="{{$code->title}}"></label>
        </div>
        <label for="description">Description: </label>
            <textarea id="description" class="description" name="description"  placeholder="{{$code->description}}">{{$code->description}}</textarea>
            <div class="container price-container">
            <label for="price">Price: <input class="input-fields price" name="price" value="{{$code->price}}" placeholder="{{$code->price}}" id="number" type="number"></label>
        </div>
        <div class="container quantity-container">
            <label for="quantity">Quantity: <input class="input-fields quantity" value="{{$code->quantity}}" name="quantity" id="quantity" placeholder="{{$code->quantity}}" type="number"></label>
        </div>
        <label for="category">Category:
            <select id="category">
                @foreach($code->category->all() as $category)
                    <option>{{$category['title']}}</option>
                @endforeach
            </select>
            <div class="pic"><img style="width: 300px" src="{{asset('img/'.$code->img)}}"></div>
            <label for="img">Img: <input class="input-fields" name="img" id="img" type="file"></label>
        </label><br>
            <input type="submit" class="update-btn" value="Update">
    </div>
    </form>
    </div>
    </div>
</div>
</body>
</html>
