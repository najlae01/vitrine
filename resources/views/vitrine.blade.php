
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
		<!-- <link rel="stylesheet" href="http://localhost/evitrine/public/css/main.css" /> -->
		<link href="{{ 'css/main.css' }}" rel="stylesheet">
		
	</head>
	<body style="background-color: #000000">
		<img src="css/images/cat_eye.jpg" width="100%" height="100%" alt="not found" />
		<!-- Header -->
		<header id="header"  style="color: #e7d9ea" class="alt" >
				<div class="logo" style="font-family:cursive; margin-left:5px; margin-right:400px;" ><a href="/">IDY</a></div>
				<div class="menu" ><a style="text-decoration:none; margin-right:30px;" id="#menu"  href="http://127.0.0.1:8000/categories" ><i class="fas fa-bars"></i>Categories</a>
				<a style="text-decoration:none; margin-right:10px;" href="http://127.0.0.1:8000/products" ><i class="fas fa-bars"></i>Products</a></div>
			</header>

		<!-- Nav -->
		<nav id="menu">
			<ul class="links">
				@foreach($categories as $category)
				<li  style="color: #e7d9ea"><a href="http://127.0.0.1:8000/products/category/{{ $category->id }}">{{$category->name_cat}}</a></li>
				@endforeach
			</ul>
        </nav>

		<!-- Banner -->
		<section class="banner full"  style= "background-color: #000000; color: #e7d9ea">
				<div style="  margin-bottom:50px; margin-top:200px; margin-left:30px; margin-right:30px; display:inline-block; background-color: #0C0C0C; border: 1px solid #0C0C0C; border-radius:25px">
					<img src="css/images/gcosmetics.jpg" width="300px" height= "300px" alt="not found" style= " margin-left:30px; margin-top:30px; margin-right:160px; border: 1px solid #0C0C0C; border-radius:50%"/>
						
			
				<img src="css/images/gnatural.jpg" width="300px" height= "300px"alt="not found" style= " margin-top:30px; margin-right:160px; border: 1px solid #0C0C0C; border-radius:50%" />
						
			
			
				<img src="css/images/ganime.jpg" width="300px" height= "300px"alt="not found" style=  " margin-top:30px;; border: 1px solid #0C0C0C; border-radius:50%"/>
					<div style=" font-size:1.8em; margin-left:10px; font-variant: small-caps; font-style: oblique; font-weight: 500; font-family:cursive; display:inline-block; background-color: #0C0C0C; border: 1px solid #0C0C0C; border-radius:25px">
					<a style=" text-decoration:none; margin-bottom:30px; margin-left:50px; margin-right:200px; display:inline-block;" href="http://127.0.0.1:8000/categories/category?name_cat=Natural">Natural Contacts</a>
					<a style=" text-decoration:none; margin-bottom:30px; margin-right:220px; display:inline-block;" href="http://127.0.0.1:8000/categories/category?name_cat=Cosmetic">Cosmetic Contacts</a>
					<a style=" text-decoration:none; margin-bottom:30px; display:inline-block;" href="http://127.0.0.1:8000/categories/category?name_cat=Anime">Anime Contacts</a>
					</div>	
				</div>
		</section>
</br>	
</br>
</br>
		<section id="one" class="wrapper style2" style="background-color: #000000"  style="margin-bottom:50px; margin-top:200px;">
            <!-- One -->
			<div class="inner">
				<div class="grid-style" style="background-color: #000000"  style="margin-bottom:50px; margin-top:200px;">
                    @foreach($products as $product)
						<div>
							
							<div class="box " style="background-color: #000000"  style="margin-bottom:50px; margin-top:200px;" style="border: solid 2px #301b3f; border-radius: 50px; background: #f5eaf7">
							<br>	
							<div class="image fit">
									<img style= "  border: 1px solid #0C0C0C; border-radius:25%" src="{{ asset('/uploads/products/' . $product->image) }}" alt="not found" />
								</div>
								<div class="content">
									<header class="align-center">
										<p style="color: #989898; font-variant: small-caps; font-style: oblique; font-weight: 300; font-family:serif;">{{ $product->name_pr }}</p>
									</header>
                                    <h5  class="align-center" style="color: #989898; font-variant: small-caps; font-style: oblique; font-weight: 300; font-family:serif;">{{ $product->price }} Dhs</h5>
									<footer class="align-center">
										<a href="http://127.0.0.1:8000/product/{{ $product->id }}/detail" class="button" style="border-radius:25px; background: #301b3f; color: #a9A9A9">Details</a>
									</footer>
								</div>
                            </div>
                            </br>
						</div>
                        @endforeach
					</div>
                </div>
                <div class="row ">
					<div class="col-md-12 d-flex justify-content-center" >
						{!! $products->render() !!}
					</div>
    			</div>
            </section>
		
			<div class="about" style="display:inline-block; color: #a9A9A9; margin-left:30px; margin-right:680px; width: 400px; font-variant: small-caps; font-style: oblique; font-weight: 300; font-family:serif;">
					<h2 style="color: #989898; margin-left:15px; font-variant: small-caps; font-style: oblique; font-weight: 300; font-family:serif;">About Us</h2>
					<p>With almost a decade's experience under the belt, IDY aims to become the World's largest colored contact lens online retailer.
					</br>
					We make exciting things happen. When it is us,
					 fashion & cosplay industry unite to ensure the availability of costumes plus accessorie.</p>
			</div>
			<div class="contact" style="display:inline-block; color: #a9A9A9; width: 200px; font-variant: small-caps; font-style: oblique; font-weight: 300; font-family:serif;">
					<h2 style="color: #989898; margin-left:15px; font-variant: small-caps; font-style: oblique; font-weight: 300; font-family:serif;">Contact Us</h2>
					<h4 style="color: #989898; font-variant: small-caps; font-style: oblique; font-weight: 300; font-family:serif;">Contact us if you have any questions!</h4>
					<p>Email address: support@idy.com 
					</br>
					Address: P.O.BOX 165, Av 11, Tangier, Morocco
					</p>
			</div>
		
			<!-- Footer -->
			<footer id="footer" style="background: #000000">
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
			<script src="http://localhost/evitrine/public/assets/js/jquery.min.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/jquery.scrollex.min.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/skel.min.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/util.js"></script>
			<script src="http://localhost/evitrine/public/assets/js/main.js"></script>
	</body>
</html>
