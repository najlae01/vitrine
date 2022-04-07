<!DOCTYPE HTML>

<html>
	<head>
		<title>Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="http://localhost/evitrine/public/css/main.css" />
        <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
	</head>
	<body class="subpage" style="background: #000000; ">

		<!-- Header -->
        <header id="header" style="background: #0C0C0C">
				<div style="height:40px"  class="logo"><a style=" font-size: 1.5em; color: #e7d9ea; text-decoration:none; font-family:cursive; margin-left:10px;" href="http://localhost:8000">IDY</a></div>
			</header>

<section id="one" class="wrapper style2" style="background: #000000; ">
                    <div class="inner">
                        <div class="grid-style" style="background: #000000; " >
                        @foreach($products as $product)
                            <div>
                                <div class="box " style="border: solid 2px #000000; background: #000000">
								<br>
                                    <div  style= " margin-top:30px; text-align: center;" class="image fit">
                                        <img width="350px" height= "350px"alt="not found" style= "border: 1px solid #0C0C0C; border-radius:50px"  src="{{ asset('/uploads/products/' . $product->image) }}" alt="" />
                                    </div>
                                    <div class="content" style= " margin-top:10px; text-align: center;">
                                        <header  class="align-center" style="font-size:1em; color: #e7d9ea; font-variant: small-caps; font-style: oblique; font-weight: 500; font-family:cursive; ">
                                            <h3 style="font-size:1.5em;" >{{ $product->name_pr }}</h3>
                                        </header>
                                        <p style="color: #e7d9ea; font-variant: small-caps; font-style: oblique; font-size:1.2em; font-weight: 500; ">{{ $product->category->name_cat}}</p>
                                        <h5 style="color: #e7d9ea; font-variant: small-caps; font-style: oblique; font-weight: 500; ">{{ $product->price }} Dhs</h5>
                                        <footer class="align-center">
										<button type="submit" class="btn btn " style="background-color: #e7d9ea; margin-top:20px; border-radius:10px;"><a href="http://127.0.0.1:8000/product/{{ $product->id }}/detail" class="btn btn-sm">More</a></button>
                                
                                        </footer>
                                    </div>
                                </div>
                                </br>
                            </div>
                            @endforeach
                        </div>
                    </div>
            </section>
			</br>
</br>

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

	</body>
</html>