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
    <div class="Container">
                <nav class="container"> >
                    <ul>
                        <img class="logo-img" src="Images/Logo.png" style="margin-left: 20px;" height="50px" alt="SimpLyBuy">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="Products.php?sort=default">Products</a></li>

                        <li><a href="">Categories <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul>
                            <li><a href="ElectronicDevices.php?sort=default">Electronic Devices</a></li>
                            <li><a href="HomeApplience.php?sort=default">Home Appliences</a></li>
                            <li><a href="FashionProduct.php?sort=default">Fashion & Clothing</a></li>
                            <li><a href="MedicineProduct.php?sort=default">Health Care Products</a></li>
                            <li><a href="SportProduct.php?sort=default">Sports</a></li>
                        </ul>
                        </li>

                        <li><a href="cart.php?user=<?php
                                if (isset($_SESSION["username"])){
                                    echo $_SESSION["username"];
                                }
                            ?>
                        ">My Cart</a></li>
                        <li><a href="#info">About Us</a></li>
                        <?php if (isset($_SESSION["username"])) : ?>
                            <li><a href="UserProfile.php" style="color: blue">
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

    <?php 

        if(isset($_GET['ProductID'])){
            
            $dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
            if(mysqli_connect_errno()){
                echo 'could not connect to server.';
            }

            $id = $_GET['ProductID'];

            $sql = "SELECT * From product WHERE ProductID = '$id';" ;
            $result = mysqli_query($dbCart,$sql) or die("Error in $sql");

            $row = mysqli_fetch_assoc($result);


        }

    ?>

    <div class="small-container single-product">
        <div class="Row">
            <div class="TwinColumn">
                <?php echo "<img src = '{$row['img_dir']}' width = 50% >"; ?>

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
                <p>Home / ProductDetails</p>
                <h1><?php echo $row['ProductName']; ?></h1>
                <h4>&#2547;<?php echo $row['Price']; ?></h4>

                <div class="rating">
                    <?php
                        $rating = $row['Rating'];
                    ?>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <?php
                            
                    if($rating > 4.5):
                    ?>
                    <i class="fa fa-star"></i>
                    <?php
                        elseif($rating > 4.3):
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

                <select>
                    <option>Custom 1</option>
                    <option>Custom 2</option>
                    <option>Custom 3</option>
                </select>

                <br>

                <form action="CartAddProduct.php?user=<?php
                if(isset($_SESSION["username"]))
                echo $_SESSION["username"];
            ?>&addCartID=<?php echo $row['ProductID']; ?>" method="post">
                    <input type="Number" min="1" value="1" name="count">
                    <button type="submit">Add To Cart</button>
                </form>

                <br>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p><?php echo $row['Details']; ?></p>

                <br>

    <?php 

        if(isset($_SESSION["username"])):

    ?>

                <form method="post" action="UserRateProduct.php">
                    <h3>Rate This Product 
                    <input max="5" min="0" type="Number" name="rating">
                    </h3>
                    <input type="hidden" name="productID" value="<?php echo $row['ProductID'];?>" />
                    <button class="Button" type="submit">Rate</button>
                </form>

    <?php endif; ?>



            </div>
        </div>
    </div>

    <?php 

        $dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
        if(mysqli_connect_errno()){
            echo 'could not connect to server.';
        }

        $currentCategory = $row['Category'];
        $currentID = $row['ProductID'];
        $sql = "SELECT * From product WHERE product.Category = '$currentCategory'AND NOT ProductID = '$currentID' ORDER BY Rating DESC ;" ;
        $result = mysqli_query($dbCart,$sql) or die("Error in $sql");
        $resultCheck = mysqli_num_rows($result);
    ?>

    <div class="SmallContainer">
        <h2 class="Title">Related Products</h2>
        <div class="ThreeColumnRow">
        <?php 

            $count = 1;

            if($resultCheck>0):
            while ($row = mysqli_fetch_assoc($result)):
        ?>
            <div class="ThreeColumn">
                <a href="ProductDetails.php?ProductID=<?php echo $row['ProductID']?>">
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


    <!-- Footer -->

    <div class="Footer" id="info">
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

</body>
</html>