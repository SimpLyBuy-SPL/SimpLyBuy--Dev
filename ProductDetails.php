<!--Sakib-->

<?php include('SimplyBuyServer.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SimplyBuy</title>

    <link rel="stylesheet" href="StyleSheet.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>

<body>
    <div class="Body">
        <div class="Container">
            <div class="navbar">
                <div class="logo">
                    <img src="Images/Logo.png" width="300px">
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
        </div>
    </div>
    </div>

    <div class="small-container single-product">
        <div class="Row">
            <div class="TwinColumn">
                <img src="Images/DemoProductImage.jpg" width="50%" id="product">

                <div class="small-img-row">
                    <div class="small-img-column">
                        <img src="Images/DemoProductImage.jpg" width="100%" class="samll-img">
                    </div>
                    <div class="small-img-column">
                        <img src="Images/DemoProductImage.jpg" width="100%" class="samll-img">
                    </div>
                    <div class="small-img-column">
                        <img src="Images/DemoProductImage.jpg" width="100%" class="samll-img">
                    </div>
                    <div class="small-img-column">
                        <img src="Images/DemoProductImage.jpg" width="100%" class="samll-img">
                    </div>
                </div>
            </div>
            <div class="TwinColumn">
                <p>Home / Product</p>
                <h1>Product Name</h1>
                <h4>&#2547;500.00</h4>
                <select>
                    <option>Custom 1</option>
                    <option>Custom 2</option>
                    <option>Custom 3</option>
                </select>
                <input type="Number" value="1">
                <a href="" class="Button">Add To Cart</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Quidem natus optio sapiente eos exercitationem?
                    Similique delectus non dignissimos laudantium tenetur!</p>
            </div>
        </div>
    </div>

    <?php 

        $dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
        if(mysqli_connect_errno()){
            echo 'could not connect to server.';
        }

        $currentCategory = 'Fashion'/*$row['Category']*/; //Will be Taken From Sakib's Code.
        $sql = "SELECT * From product WHERE product.Category = '$currentCategory' ORDER BY Rating DESC;" ;
        $result = mysqli_query($dbCart,$sql) or die("Error in $sql");
        $resultCheck = mysqli_num_rows($result);
    ?>

    <div class="SmallContainer">
		<h2 class="Title">Related Products</h2>

        <?php 

            $count = 1;

            if($resultCheck>0):
            while ($row = mysqli_fetch_assoc($result)):
        ?>

		<div class="ThreeColumnRow">
			<div class="ThreeColumn">
				<?php echo "<img src = '{$row['img_dir']}'>"; ?>
				<h4>
                    <?php echo $row['ProductName'] ;?>            
                </h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p><?php echo $row['Price'] ;?> </p>
			</div>
		</div>

        <?php
                endwhile;
            endif;
        ?>

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