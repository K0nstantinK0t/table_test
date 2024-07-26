<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Список продуктов</title>
</head>
<body>
    <h3>Товары</h3>
    @foreach($products as $product)
        <a href="{{route('product', $product->external_code)}}">
            Код: {{$product->external_code}}
            <br />
            Название: {{$product->name}}
        </a>
        <br/>
        <br/>
    @endforeach
</body>
</html>
