<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>e-Commerce</title>
	<style>
		.custom-login
		{
			height: 500px;
			margin-top: 100px;
		}
	</style>
	<!-- bootstrap cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>

	<!-- bootstrap script -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</head>
<body>
	{{View::make('header')}}
	@yield('content')
	{{View::make('footer')}}

</body>
</html>
