<?php include('SimplyBuyServer.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>SimplyBuy</title>

	<link rel="stylesheet" href="StyleSheet.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

</head>

<body>
	<div class="Body">
		<div class="Container">
			<div class="navbar">
				<div class="logo">
					<a href="home.php"><img src="Images/Logo.png" width="300px"></a>
				</div>
				<nav>
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="Products.php">Products</a></li>
						<li><a href="">Categories</a></li>
						<li><a href="cart.php">My Cart</a></li>
						<li><a href="">About Us</a></li>
						<?php if (isset($_SESSION["username"])) : ?>
							<li><a href="" style="color: blue">
									<?php echo $_SESSION["username"]; ?></a>
							</li>
							<li><a href="home.php?logout='1' style=" color">Log Out</a></li>
						<?php else : ?>
							<li><a href="Login.php">Login</a></li>
						<?php endif ?>
					</ul>
				</nav>
			</div>
			<div class="Row">

				<div class="TwinColumn">
					<h1>Easy and Safe Shopping
						<br> From Home !!
					</h1>
					<p>Pick what you Desire most</p>
					<a href="#TrendingCategories" class="Button">Lets Get Started</a>
				</div>
				<div class="TwinColumn">
					<img src="Images/HomeImageBG.jpg">
				</div>
			</div>
		</div>

		<div id="TrendingCategories" class="Categories">
			<div class="SmallContainer">
				<div class="Row">
					<div class="FiveColumn">
						<a href="ElectronicDevices.php">
							<img src="Images/Electronic Devices .jpg">
						</a>
					</div>
					<div class="FiveColumn">
						<a href="HomeApplience.php">
							<img src="Images/Home Applience.png">
						</a>
					</div>
					<div class="FiveColumn">
						<a href="FashionProduct.php">
							<img src="Images/d4510137b6c66aadaf6f236730910ba8.jpg">
						</a>
					</div>
					<div class="FiveColumn">
						<a href="MedicineProduct.php">
							<img src="Images/Medicine Product.jpg">
						</a>
					</div>
					<div class="FiveColumn">
						<a href="SportProduct.php">
							<img src="Images/Sports.jpg ">
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="SmallContainer">
			<h2 class="Title">Featured Products</h2>

			<div class="ThreeColumnRow">
				<div class="ThreeColumn">
					<img src="Images/DemoProductImage.jpg">
					<h4>DemoName</h4>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>৳ 00.00</p>
				</div>
				<div class="ThreeColumn">
					<img src="Images/DemoProductImage.jpg">
					<h4>DemoName</h4>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>৳ 00.00</p>
				</div>
				<div class="ThreeColumn">
					<img src="Images/DemoProductImage.jpg">
					<h4>DemoName</h4>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>৳ 00.00</p>
				</div>
			</div>
		</div>
	</div>

	<div class="SmallContainer">
		<h2 class="Title">New Products</h2>

		<div class="ThreeColumnRow">
			<div class="ThreeColumn">
				<img src="Images/DemoProductImage.jpg">
				<h4>DemoName</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>৳ 00.00</p>
			</div>
			<div class="ThreeColumn">
				<img src="Images/DemoProductImage.jpg">
				<h4>DemoName</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>৳ 00.00</p>
			</div>
			<div class="ThreeColumn">
				<img src="Images/DemoProductImage.jpg">
				<h4>DemoName</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>৳ 00.00</p>
			</div>
		</div>
	</div>
	</div>

	<div class="Body">
		<div class="Container">
			<div class="ContainerRow">
				<div class="TwinColumn">
					<img src="Images/DemoProductImage.jpg">
				</div>
				<div class="TwinColumn">
					<p>Exclusively Available for Limited Time</p>
					<h1>DemoName</h1>
					<p><strike> ৳ 00.00</strike> ৳ 00.00</p>
					<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.</small>
				</div>
			</div>
		</div>
	</div>

	<div class="FeaturedReviews">
		<div class="SmallContainer">
			<div class="ContainerRow">
				<div class="ThreeColumn">
					<i class="fa fa-quote-left"></i>
					<p>Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<img src="Images/DemoGirl.png">
						<h3>
							<p>User Name</p>
						</h3>
					</div>
				</div>
				<div class="ThreeColumn">
					<i class="fa fa-quote-left"></i>
					<p>Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<img src="Images/DemoBoy.jpg">
						<h3>
							<p>User Name</p>
						</h3>
					</div>
				</div>
				<div class="ThreeColumn">
					<i class="fa fa-quote-left"></i>
					<p>Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<img src="Images/DemoGirl.png">
						<h3>
							<p>User Name</p>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<div class="Footer">
		<div class="Container">
			<div class="Row">
				<div class="FooterColumn">
					<h3> Download Related Apps </h3>
					<p>Download Apps for Android and ios for Mobile Phone</p>
				</div>
				<div class="FooterColumn">
					<h3> Usefull Links</h3>
					<ul>
						<li>Discount Vaucher</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Join Affliate</li>
					</ul>
				</div>
				<div class="FooterColumn">
					<h3> Support Us</h3>
					<ul>
						<li>FaceBook</li>
						<li>Twitter</li>
						<li>Instagram</li>
					</ul>
				</div>
			</div>
			<hr>
			<p style="text-align: center;">Copyright &copy; 2021 - SimpLyBuy</p>
		</div>
	</div>

</body>

</html>