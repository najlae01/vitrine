<!DOCTYPE HTML>

<html>
	<head>
		<title>IDY</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
	</head>
	
<body style="background-color: #000000">
<img src="css/images/cat_eye.jpg" width="100%" height="100%" alt="not found" />
		<main class="py-4" >
            @yield('content')
        </main>

		<!-- Footer -->
		<footer id="footer" style="background: #000000; color: #e7d9ea">
			<div class="container">
				<ul class="icons">
					<li><a href="https://twitter.com/" style="color: #e7d9ea"><i class="fab fa-twitter mx-1"></i></a></li>
					<li><a href="https://www.facebook.com/" style="color: #e7d9ea"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://www.instagram.com/" style="color: #e7d9ea"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
			<div class="copyright" style="color: #e7d9ea">
				&copy; IDY. All rights reserved.
			</div>
		</footer>

		<!-- Scripts -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrollex.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/util.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
