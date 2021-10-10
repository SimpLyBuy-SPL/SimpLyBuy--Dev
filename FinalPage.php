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
                $sql = "SELECT Quantity From product WHERE ProductID = '$productID'";
                $res = mysqli_query($dbCart,$sql);
                $info = mysqli_fetch_assoc($res);
                $updatedQuantity= $info['Quantity'] - $quantity;
                $sql = "UPDATE product SET Quantity = '$updatedQuantity' WHERE product.ProductID = '$productID';";
                $res = mysqli_query($dbCart,$sql);
            }
        }

    }

    if(isset($_POST['placeOrder'])){

            $dbCon = mysqli_connect('localhost','root', '', 'registration');
            if(mysqli_connect_errno()){
                echo 'could not connect to server.';
            }

            $name = $_SESSION["username"];
            $sql = "SELECT * From user WHERE UserName = '$name';" ;
            $result = mysqli_query($dbCon,$sql) or die("Error in $sql");
            $row = mysqli_fetch_assoc($result);

            $customeID =  $row['ID'];
            $deliverAddress = $_POST['deliverAddress'];
            $shipDate = date('d-m-Y', strtotime('+1 week'));

            $sql = "SELECT SUM(product.price*cart.CartQuantity) AS Total From product,cart WHERE product.ProductID = cart.CartProductID AND cart.UserName = '$user'" ;
            $result = mysqli_query($dbCart,$sql);
            $row = mysqli_fetch_assoc($result);
            $total = $row['Total'];
            $amountToPay = $total*1.05 ;

            $sql = "INSERT INTO ordertable (CustomerID, ShipAddress , ShipDate , SumPrice) VALUES ('$customeID', '$deliverAddress', '$shipDate', '$amountToPay');" ;
            $result = mysqli_query($dbCart,$sql);

            $sql = "DELETE FROM `cart` WHERE `cart`.`UserName` = '$user';" ;
            $result = mysqli_query($dbCart,$sql);
            

            echo "Order Placed Successfully";

        }

?>