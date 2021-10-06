<!--Connecting Server Verification System -->

<?php include('SimplyBuyServer.php');  ?>

<!--HTML with PHP Imbedded-->

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


		<div class="Container">
			<div class="Row">
				
				<div class="TwinColumn">
					<h1>Easy and Safe Shopping
					<br> From Home !!</h1>
					<p>Pick what you Desire most</p>
					<a href="#TrendingCategories" class ="Button">Lets Get Started</a>
				</div>
				<div class="TwinColumn">
					<img src="Images/HomeImageBG.jpg">
				</div>
			</div>
    	</div>

		<div id="TrendingCategories" class="Categories">  <!--Connect With Other web Pages-->
			<div class="SmallContainer">
				<div class="Row">
					<div class="FiveColumn">
						<a href="ElectronicDevices.php">
		         			<img src="Images/ElectronicDevice.jpg ">
		     			</a>
					</div>
					<div class="FiveColumn">
						<a href="HomeApplience.php">
		         			<img src="Images/HomeApplience.jpg ">
		     			</a>
					</div>
					<div class="FiveColumn">
						<a href="FashionProduct.php">
		         			<img src="Images/Fashion.jpg ">
		     			</a>
					</div>
					<div class="FiveColumn">
						<a href="MedicineProduct.php">
		         			<img src="Images/HealthCare.jpg ">
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

		<?php 

	        $dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
	        if(mysqli_connect_errno()){
	            echo 'could not connect to server.';
	        }

	        $sql = "SELECT * From product ORDER BY Rating DESC LIMIT 3;" ;
	        $result = mysqli_query($dbCart,$sql) or die("Error in $sql");
	        $resultCheck = mysqli_num_rows($result);
	    ?>

		<div class="SmallContainer">

			<h2 class="Title">Featured Products</h2>

			<div class="ThreeColumnRow">

				<?php 

	            $count = 1;

	            if($resultCheck>0):
	            while ($row = mysqli_fetch_assoc($result)):
	        	?>
				<div class="ThreeColumn">
					<?php echo "<img src = '{$row['img_dir']}'>"; ?>
					<h4>
	                    <?php echo $row['ProductName'] ;?>            
	                </h4>
					<div class="rating">
						<?php
							$rating = $row['Rating'];
						?>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<?php
							
							if($rating == 5):
						?>
						<i class="fa fa-star"></i>
						<?php
							elseif($rating == 4.5):
						?>
						<i class="fa fa-star-half-o"></i>
						<?php
							else :
						?>
						<i class="fa fa-star-o"></i>
						<?php
							endif;
						?>
					</div>
					<p><?php echo 'Price: '.$row['Price'] ;?> </p>
				</div>

		        <?php
		                endwhile;
		            endif;
		        ?>	
			</div>

		</div>

	</div>

	<?php 

        $sql = "SELECT * From product ORDER BY Time_Added DESC LIMIT 3;" ;
        $result = mysqli_query($dbCart,$sql) or die("Error in $sql");
        $resultCheck = mysqli_num_rows($result);
    ?>

	<div class="SmallContainer">
		<h2 class="Title">New Products</h2>

		<div class="ThreeColumnRow">

			<?php 

            $count = 1;

            if($resultCheck>0):
            while ($row = mysqli_fetch_assoc($result)):
        	?>
			<div class="ThreeColumn">
				<?php echo "<img src = '{$row['img_dir']}'>"; ?>
				<h4>
                    <?php echo $row['ProductName'] ;?>            
                </h4>
				<div class="rating">
					<?php
							$rating = $row['Rating'];
						?>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<?php
							
							if($rating == 5):
						?>
						<i class="fa fa-star"></i>
						<?php
							elseif($rating == 4.5):
						?>
						<i class="fa fa-star-half-o"></i>
						<?php
							else :
						?>
						<i class="fa fa-star-o"></i>
						<?php
							endif;
						?>
				</div>
				<p><?php echo 'Price: '.$row['Price'] ;?> </p>
			</div>

	        <?php
	                endwhile;
	            endif;
	        ?>
				
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
					<p><strike> ৳ 00.00</strike>    ৳ 00.00</p>
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
						<h3><p>User Name</p></h3>
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
						<h3><p>User Name</p></h3>
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
						<h3><p>User Name</p></h3>
					</div>
				</div>
			</div>
		</div>
	</div>	

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
			<p class="Copyright">Copyright 2021 - SimplyBuy</p>
		</div>
	</div>

</body>
</html>