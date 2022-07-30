<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>404 HTML Template by Colorlib</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet">

	<!-- Custom stlylesheet -->
    <link href="{{asset('../assets/css/404.css')}}" rel="stylesheet" />
	{{-- <link type="text/css" rel="stylesheet" href="css/style.css" /> --}}


</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-bg">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<h1>oops!</h1>
			<h2>Error 404 : Page Not Found</h2>
			<a href="{{route('home')}}">go back</a>
			<div class="notfound-social">
				<a href="https://www.facebook.com/hossamali66"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/hossamali66"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com/in/hossamali6/"><i class="fa fa-linkedin"></i></a>
			</div>
		</div>
	</div>
    <script src="https://kit.fontawesome.com/06cccea7d4.js" crossorigin="anonymous"></script>

</body>

</html>
