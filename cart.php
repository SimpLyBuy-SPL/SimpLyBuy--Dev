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
            <div class="navbar">
                <div class="logo">
                    <img src="Images/Logo.png" width="300px">
                </div>
                <nav>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="Products.php?sort=default">Products</a></li>

                        <li><a href="">Categories <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul>
                            <li><a href="ElectronicDevices.php?sort=default">Electronic Devices</a></li>
                            <li><a href="HomeApplience.php?sort=default">Home Appliences</a></li>
                            <li><a href="FashionProduct.php?sort=default">Fashion & Clothing</a></li>
                            <li><a href="MedicineProduct.php?sort=default">Health Care</a></li>
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
    </div>


    <?php

    if(!empty($_GET['user'])){

        $user =  $_GET['user'];

        $dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
        if(mysqli_connect_errno()){
            echo 'could not connect to server.';
        }

        $sql = "SELECT * From product,cart WHERE product.ProductID = cart.CartProductID AND cart.UserName = '$user';" ;
        $result = mysqli_query($dbCart,$sql);
        $resultCheck = mysqli_num_rows($result);
    }

    else{

        $resultCheck = 0;
    }

    ?>

    <div class="samll-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

        <?php

        $subtotal = 0 ;
        $taxrate = 0.05 ;

        if($resultCheck>0):
            while ($row = mysqli_fetch_assoc($result)): 
        ?>

            <tr>
                <td>
                    <div class="cart-info">
                        <?php echo "<img src = '{$row['img_dir']}'>"; ?>
                        <div>
                            <p>
                                <?php  
                                    echo $row['ProductName'];
                                ?> 
                            </p>
                            <small>
                                Price: &#2547;
                                <?php  
                                    echo $row['Price'];
                                ?>
                            </small>
                            <button name="removeProduct" class="removebutton"><a href="CartRemoveProduct.php?deleteID=<?php echo $row['ProductID']; ?>">Remove</button>
                        </div>
                    </div>
                </td>
                <td>
                    <?php  
                        echo $row['CartQuantity'];
                    ?>
                </td>
                <td>&#2547;
                    <?php
                        $unitTotal = $row['Price'] * $row['CartQuantity'];
                        echo $unitTotal;
                        $subtotal = $subtotal + $unitTotal;
                    ?>
                </td>
            </tr>

        <p>
            <?php
                endwhile;

              else:
                echo "Cart is Empty";

             endif;
            ?>
        </p>
        <br>


        </table>

        <hr style="height: 2px; border-width:0; color:red; background-color:red">

        <div class="total-prices">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>
                        &#2547;
                        <?php echo $subtotal; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>
                        &#2547;
                        <?php
                            $tax = $subtotal * $taxrate;
                            echo $tax;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>
                        &#2547;
                        <?php
                            $Total = $subtotal + $tax;
                            echo $Total;
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div>
        <form action="FinalPage.php" method="POST">
            <button type="submit" class ="Button" name="checkout" >Checkout</button>
        </form>
    </div>

    <!-- Footer -->

    <div id="info" class="Footer">
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