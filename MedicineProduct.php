<?php include('SimplyBuyServer.php');  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SimplyBuy</title>

    <link rel="stylesheet" href="StyleSheet.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <div class="Body">
    <div class="Dropdown">
			<nav>
				<img class="logo" src="Images/Logo.png">

				<ul>
					<li><a href="home.php">Home</a></li>

					<li><a href="Products.php">Products</a></li>

					<li><a href="">Categories <i class="fa fa-caret-down" aria-hidden="true"></i></a>
						<ul>
							<li><a href="ElectronicDevices.php">Electronic Devices</a></li>
							<li><a href="HomeApplience.php">Home Appliences</a></li>
							<li><a href="FashionProduct.php">Fashion & Clothing</a></li>
							<li><a href="MedicineProduct.php">Health Care</a></li>
							<li><a href="SportProduct.php">Sports</a></li>
						</ul>
					</li>

					<li><a href="cart.php?user=<?php
                                if (isset($_SESSION["username"])){
                                    echo $_SESSION["username"];
                                }
                            ?>
                        ">My Cart</a></li>

					<li><a href="#">About Us</a></li>
					
					<?php if(isset($_SESSION["username"])): ?>
							<li><a href="" style="color: blue">
							<?php echo $_SESSION["username"] ; ?></a>
							</li>
							<li><a href="home.php?logout='1'"style="color">Log Out</a></li>
						<?php else: ?>
							<li><a href="Login.php">Login</a></li>
					<?php endif ?>
				</ul>
			</nav>
		</div>
    </div>
    </div>


        <div class="SmallContainer">


        <div class="row row-2">
            <h2>Health Care Products</h2>
            <select>
                <option>Default Shorting</option>
                <option>Short by price</option>
                <option>Short by popularity</option>
                <option>Short by rating</option>
                <option>Short by sale</option>
            </select>
        </div>


            <div class="ThreeColumnRow">
                <div class="ThreeColumn">
                    <a href="ProductDetails.php"><img src="Web/BP Monitors.jpg"></a>
                    <h4>Digital Blood Pressure Monitors</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>৳ 2490.00</p>
                </div>
                <div class="ThreeColumn">
                <a href="ProductDetails.php"><img src="Web/Revoflex-Xtreme-Full-Body-Workout.jpg"></a>
                    <h4>Revoflex Xtreme Abdominal Trainer</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>৳ 850.00</p>
                </div>
                <div class="ThreeColumn">
                <a href="ProductDetails.php"><img src="Web/Slimming Belt.jpg"></a>
                    <h4>Vibro Slimming Belt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>৳ 2300.00</p>
                </div>
                <div class="ThreeColumn">
                <a href="ProductDetails.php"><img src="Web/Compressor Nebulizer - China.jpg"></a>
                    <h4>RX Care Compressor Nebulizer – China</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>৳ 1840.00</p>
                </div>
                <div class="ThreeColumn">
                <a href="ProductDetails.php"><img src="Web/Compressor Nebulizer - Italy.jpg"></a>
                    <h4>Compressor Inhaler SuperEco Nebulizer – Italy</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>৳ 2450.00</p>
                </div>
                <div class="ThreeColumn">
                <a href="ProductDetails.php"><img src="Web/Thermometer LCD Monitor.jpg"></a>
                    <h4>Non-Contact Infrared LCD Monitor Infrared Thermometer</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>৳ 2990.00</p>
                </div>
                <div class="ThreeColumn">
                <a href="ProductDetails.php"><img src="Web/Glucose Monitor.jpg"></a>
                    <h4>Accu-Chek Active Glucose Monitor</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>৳ 2395.00</p>
                </div>
                <div class="ThreeColumn">
                <a href="ProductDetails.php"><img src="Web/Fingertip Pulse Oximeter.jpg"></a>
                    <h4>Portable Fingertip Pulse Oximeter With LED Display</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>৳ 2400.00</p>
                </div>
                <div class="ThreeColumn">
                <a href="ProductDetails.php"><img src="Web/Digital Weight Machine.jpg"></a>
                    <h4>Digital Weight Machine</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>৳ 1490.00</p>
                </div>
            </div>
            
            <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594;</span>
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