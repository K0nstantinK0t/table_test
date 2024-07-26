<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<h3>Название: {{$product->name}}</h3>
        Код: {{$product->external_code}}
        <br />
        Описание:
        {{$product->description}}
<br />
        Цена:
        {{$product->price}}
<br />
        Скидка:
        {{$product->discount}}
<br />
        Размер:
        {{$product->AddFields->size}}
<br />
        Цвет:
        {{$product->AddFields->color}}
<br />
        Количество:
        {{$product->AddFields->count}}
<br />
        SEO H1:
        {{$product->AddFields->seo_h1}}
<br />
        SEO description:
        {{$product->AddFields->seo_description}}
<br />
        Вес:
        {{$product->AddFields->weight}}
<br />
        Ширина:
        {{$product->AddFields->width}}
<br />
        Высота:
        {{$product->AddFields->height}}
<br />
        Длина:
        {{$product->AddFields->length}}
<br />
        Вес упаковки:
        {{$product->AddFields->package_weight}}
<br />
        Ширина упаковки:
        {{$product->AddFields->package_width}}
<br />
        Высота упаковки:
        {{$product->AddFields->package_height}}
<br />
        Длина упаковки:
        {{$product->AddFields->package_length}}
<br />
        Категория:
        {{$product->AddFields->category}}
    <br/>
        Картинки:
{{--        @dd($product->pictures)--}}
        @foreach($product->pictures as $picture)
            <img src="{{$picture->ref}}" />
        @endforeach
    <br/>
</body>
</html>
