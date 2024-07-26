<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<form method="POST" action="/" enctype="multipart/form-data">
    @csrf
    <h3>Загрузить таблицу</h3>
    <input type="file" name="table">
    <input type="submit" value="Загрузить">
</form>
@isset ($tableLoaded)
    <h2>Файл загружен!</h2>
@endisset
<a href="{{route('table')}}" >Посмотреть таблицу</a>
</body>
</html>
