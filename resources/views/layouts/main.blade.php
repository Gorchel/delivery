<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="/bootstrap/dist/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
    <link href="/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet"> 
    <link href="/css/styles.css" type="text/css" rel="stylesheet">


	<title>Доставка</title>
	
	@section('css')
        @yield('css')
    @show
</head>
<body>
	@include('layouts.header')

	@section("content")

    @show

	@include('layouts.footer')

	@section('js')
    	@yield('js')
    @show
    <script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/nav-scrolling.js"></script>

</body>
</html>