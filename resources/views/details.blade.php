<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="css/detail.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Rubik:wght@400;500;600&display=swap"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		/>
	</head>
	<body>
		<!-- navbar -->
		<nav class="container">
			<div class="context">
				<ul class="list">
					<li>
						<a class="logo" href="{{url('/')}}">E-Devices</a>
					</li>
					<li><a class="link" href="{{url('/shop')}}">SHOP</a></li>
					<li><a class="link" href="{{url('/about')}}">ABOUT</a></li>
					<!-- <li><a class="link" href="#">BLOG</a></li> -->
					<li><a class="link" href="{{url('/register')}}">SIGN UP</a></li>
					<li><a class="link" href="{{url('/login')}}">LOGIN</a></li>
					<li><a class="link" href="{{url('/cart')}}">CART</a></li>
				</ul>
			</div>
		</nav>

		<!-- Featured -->
		<div class="feature">
			<div class="sidebar">
				<h2>By Category</h2>
				<ul class="pro">
				<li><a class="prod" href="{{url('/laptop')}}">Laptops</a></li>
					<li><a class="prod" href="{{url('/mobile')}}">Mobile</a></li>
					<li><a class="prod" href="{{url('/tablet')}}">Tablets</a></li>
					<li><a class="prod" href="{{url('/camera')}}">Camera</a></li>
				</ul>
			</div>

			<!-- Details -->
			<div class="detail">
				<div class="image">
					<img class="lap" src="img/products/laptop-1.jpg" alt="" />
				</div>
				<div class="text">
					<h2>Laptop-1</h2>
					<span class="det">13 inch, 2 TB SSD, 32GB RAM</span>
					<p class="text2">In Stock</p>
					<!-- <p class="stock">In Stock</p> -->
					<h2>$1720.58</h2>
					<span class="det">
						Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum
						temporibus iusto ipsa, asperiores voluptas unde aspernatur
						praesentium in? Aliquam, dolore!
					</span>
					<a class="cart" href="{{url('/cart')}}">Add to Cart</a>
				</div>
			</div>
		</div>
		<!-- might like -->
		<div class="like">
			<h3>You might also like....</h3>
			<div class="might">
				<div class="might1">
					<a href="{{url('/details')}}">
						<img src="img/products/tablet-1.jpg" alt="laptop-1" />
					</a>
					<a href="details.html">
						<div class="product-name">Laptop-1 &nbsp; (Rs 50000)</div>
					</a>
				</div>
				<div class="might1">
					<a href="{{url('/details')}}">
						<img src="img/products/tablet-1.jpg" alt="laptop-1" />
					</a>
					<a href="details.html">
						<div class="product-name">Laptop-1 &nbsp; (Rs 50000)</div>
					</a>
				</div>
				<div class="might1">
					<a href="{{url('/details')}}">
						<img src="img/products/tablet-1.jpg" alt="laptop-1" />
					</a>
					<a href="{{url('/details')}}">
						<div class="product-name">Laptop-1 &nbsp; (Rs 50000)</div>
					</a>
				</div>
				<div class="might1">
					<a href="{{url('/details')}}">
						<img src="img/products/tablet-1.jpg" alt="laptop-1" />
					</a>
					<a href="{{url('/details')}}">
						<div class="product-name">Laptop-1 &nbsp; (Rs 50000)</div>
					</a>
				</div>
			</div>
		</div>

		<!-- footer -->
		<footer>
			<div class="footer-content">
				<div class="copy">Copy Right &copy; 2022</div>
				<ul class="ff">
					<li class="follow">Follow Us:</li>
					<li>
						<a href="https://www.twitter.com" target="_blank"
							><i class="fab fa-twitter fa-2x"></i
						></a>
					</li>
					<li>
						<a href="https://www.instagram.com" target="_blank"
							><i class="fab fa-instagram fa-2x"></i
						></a>
					</li>
					<li>
						<a href="https://www.facebook.com" target="_blank"
							><i class="fab fa-facebook fa-2x"></i
						></a>
					</li>
					<li>
						<a href="https://www.youtube.com" target="_blank"
							><i class="fab fa-youtube fa-2x"></i
						></a>
					</li>
				</ul>
			</div>
		</footer>
	</body>
</html>
