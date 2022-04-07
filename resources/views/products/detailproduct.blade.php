<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="http://localhost/evitrine/public/css/main.css" />
        <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
	</head>
	<body class="subpage" style="background: #000000";>

		<!-- Header -->
			<header id="header" style="background: #0C0C0C">
				<div style="height:40px"  class="logo"><a style=" font-size: 1.5em; color: #e7d9ea; text-decoration:none; font-family:cursive; margin-left:10px; margin-right:400px;" href="http://localhost:8000">IDY</a></div>
			</header>
</br>
</br>
</br>
<div class="container">

  <h1  style="color: #e7d9ea; font-variant: small-caps; font-style: oblique; font-weight: 500;">{{ $product->name_pr }}</h1>
</br>
</br>
  <div class="row">
    <div class="col-md-8" >
      <img class="img-fit" src="{{ asset('/uploads/products/' . $product->image) }}" alt="" width="700px" height= "700px" style= "border: 1px solid ; border-radius:25px; ">
    </div>

    <div class="col-md-4">
      <h2 class="my-3" text-black style="color: #e7d9ea; font-variant: small-caps; font-style: oblique; font-weight: 400;">Details</h2>
      
      <h4 class="my-3" style="color: #e7d9ea; font-variant: small-caps; font-style: oblique; font-weight: 400;">Description :<h4>
      <h5 class="my-3" style="color: #e7d9ea;font-weight: 350; ">  {{ $product->description_pr }}</h6>
		<h4 class="my-3" style="color: #e7d9ea; font-variant: small-caps; font-style: oblique; font-weight: 400;">Price : {{ $product->price }}</h4>

     
    </div>

  </div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<!-- Footer -->
<footer id="footer" style=" text-align: center; background: #000000">
				<div class="container" style="margin-bottom: 10px;">
					<div class="icons">
						<a href="https://twitter.com/" style="color: #e7d9ea; display: inline-block;  margin-right:30px;"><i class="fab fa-twitter mx-1"></i></a>
						<a href="https://www.facebook.com/" style="color: #e7d9ea; display: inline-block; margin-right:30px;"><i class="fab fa-facebook-f"></i></a>
						<a href="https://www.instagram.com/" style="color: #e7d9ea; display: inline-block;"><i class="fab fa-instagram"></i></a>
                    </div>
				</div>
				<div class="copyright" style="color: #e7d9ea; margin-bottom: 10px;">
					&copy; IDY. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="http://localhost/evitrine/public/assets/js/jquery.min.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/jquery.scrollex.min.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/skel.min.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/util.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/main.js"></script>
	</body>

</html>