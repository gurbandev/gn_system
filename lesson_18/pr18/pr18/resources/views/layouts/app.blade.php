<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}">
    <script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <title>@yield('title') - Store</title>
</head>
<body>
@include('app.nav')
@include('product.index')

</body>
</html>