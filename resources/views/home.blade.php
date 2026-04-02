<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('base.base')
    @section('content')
        <h2>This is My Home Page</h1>
        <p>Product Name: {{ $product_name }}</p>
        <p>Category: {{ $product_category }}</p>
        <p>{!! $button !!}</p>
    @endsection
</body>
</html>