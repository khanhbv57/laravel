<!DOCTYPE html>
<html>
<head>
	<title>Khóa học @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
		#wrapper {width: 980px;height: auto;margin: 0px auto}
		#header {width: auto;height: 200px;background: blue}
		#content {width: auto;height: 500px;background: yellow}
		#footer {width: auto;height: 100px;background: green}
	</style>
</head>
<body>
	<div id="wrapper">
		@include('views.marquee')
		<div id="header">
			@section('sidebar')
				Đây là menu
			@show
		</div>
		<div id="content">
			@yield('noidung')
		</div>
		<div id="footer"></div>
	</div>
	
</body>
</html>