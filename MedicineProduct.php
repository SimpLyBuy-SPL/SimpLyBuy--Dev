<!--Sakib-->

<?php include('SimplyBuyServer.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SimpLyBuy ~ Health Care Products</title>

    <link rel="stylesheet" href="StyleSheet.css">
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
                        <li><a href="">Products</a></li>
                        <li><a href="">Categories</a></li>
                        <li><a href="cart.php">My Cart</a></li>
                        <li><a href="">About Us</a></li>
                        <?php if (isset($_SESSION["username"])) : ?>
                            <li><a href="" style="color: blue">
                                    <?php echo $_SESSION["username"]; ?></a>
                            </li>
                            <li><a href="home.php?logout='1'style=" color">Log Out</a></li>
                        <?php else : ?>
                            <li><a href="Login.php">Login</a></li>
                        <?php endif ?>
                    </ul>
                </nav>
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
                    <a href="ProductDetails.php"><img src="Images/DemoProductImage.jpg"></a>
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
                <a href="ProductDetails.php"><img src="Images/DemoProductImage.jpg"></a>
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
                <a href="ProductDetails.php"><img src="Images/DemoProductImage.jpg"></a>
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
                <a href="ProductDetails.php"><img src="Images/DemoProductImage.jpg"></a>
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
                <a href="ProductDetails.php"><img src="Images/DemoProductImage.jpg"></a>
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
                <a href="ProductDetails.php"><img src="Images/DemoProductImage.jpg"></a>
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
                <a href="ProductDetails.php"><img src="Images/DemoProductImage.jpg"></a>
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
                <a href="ProductDetails.php"><img src="Images/DemoProductImage.jpg"></a>
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
                <a href="ProductDetails.php"><img src="Images/DemoProductImage.jpg"></a>
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