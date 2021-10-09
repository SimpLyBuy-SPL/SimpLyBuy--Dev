<?php 

    include('SimplyBuyServer.php');

    $user =  $_SESSION["username"];

    if (isset($_POST['placeOrder'])) {
        $dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
        if(mysqli_connect_errno()){
            echo 'could not connect to server.';
        }

        $sql = "SELECT * From cart WHERE cart.UserName = '$user';" ;
        $result = mysqli_query($dbCart,$sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck>0){
            while ($row = mysqli_fetch_assoc($result)){
                $productID = $row['CartProductID'];
                $quantity = $row['CartQuantity'];
                $sql = "INSERT INTO orders (UserName, ProductID, Quantity) VALUES ('$user', '$productID', '$quantity')";
                $res = mysqli_query($dbCart,$sql);
            }
        }
        $sql = "DELETE FROM `cart` WHERE `cart`.`UserName` = '$user';" ;
        $result = mysqli_query($dbCart,$sql);

        echo "Order Placed Successfully";

    }

?>