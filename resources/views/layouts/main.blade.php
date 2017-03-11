<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
</body>
</html>