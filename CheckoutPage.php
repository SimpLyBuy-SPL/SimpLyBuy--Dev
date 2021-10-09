<?php include('SimplyBuyServer.php');  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SimplyBuy</title>

    <link rel="stylesheet" href="CheckoutPageStyleSheet.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="StyleSheet.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

    <body>
        <div class="Body">
            <div class="Container">
                <nav class="container">
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
                                                    if (isset($_SESSION["username"])) {
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


        <div class="checkout">
            <div class="payment_details">
                <div class="details_card">
                    <div style="text-align:center; font-size:x-large"><strong>Shipping Information</strong></div><br><br>
                    <div class="order_total" style="border: black; border-width:1px; border-style:solid;">
                        <h4><strong>Payment Method :</strong></h4>
                        <h4>Cash On Delivery</h4>
                    </div>
                    <br>
                    <div class="order_total" style="border: black; border-width:1px; border-style:solid;">
                        <h4><strong>Delivery Date (estimated) :</strong></h4>
                        <h4>04/01/2021</h4>
                    </div>
                    <br>
                    <div class="order_total" style="border: black; border-width:1px; border-style:solid;">
                        <h4><strong>Default Address :</strong></h4>
                        <h4>Rajshahi, Bangladesh</h4>
                    </div>
                    <br>
                    <div class="shipping_card">
                        <form class="form_submit">
                            <!-- <h4>Same as personal</h4>
                            <p id="output">Bharat House Bombay Samachar Road</p>
                            <p>400001</p> -->
                            <label  >Change Delivery Location</label>
                            <input placeholder="Enter address">
                        </form>
                    </div>
                    <div class="proced_payment">
                        <a href="">Place Order</a>
                    </div>
                </div>
            </div>
            <div class="order_summary">

                <div class="summary_card">
                    <div style="text-align:center; font-size:x-large"><strong>Order Summary</strong></div>
                    <br>
                    <hr><br><br><br><br>

                    <div>
                        Shipping and additional costs are calculated based on 1 product that you have added to cart.
                    </div>
                    <br><br><br><br><br>


                    <hr>
                    <div class="order_total">
                        <h4><strong>Subtotal</strong></h4>
                        <h4>400 BDT</h4>
                    </div>
                    <div class="order_total">
                        <h4><strong>Tax</strong></h4>
                        <h4>10 BDT</h4>
                    </div>
                    <div class="order_total">
                        <h4><strong>Total Amount</strong></h4>
                        <h4>410 BDT</h4>
                    </div>
                </div>
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

</body>

</html>