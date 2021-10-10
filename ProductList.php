<?php include('SimplyBuyServer.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimplyBuy</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <link rel="stylesheet" href="AdminProfileStyleSheet.css">
    <link rel="stylesheet" href="ProductList.css">

</head>

<body>
    <div class="student-profile py-4">
        <div class="container">
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Bootstrap Navbar with Logo Image</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

                <link rel="stylesheet" href="AdminProfileStyleSheet.css">
            </head>

            <body>
                <div class="m-4">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius: 10px;">
                        <div class="container-fluid">
                            <a href="#" class="navbar-brand">
                                <img src="Images/Logo.png" height="40px" alt="Simplybuy">
                            </a>
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav">
                                    <a href="home.php?logout=1" class="nav-item nav-link active">Home</a>
                                    <a href="AdminProfile.php" class="nav-item nav-link active">Admin Profile</a>
                                    <a href="AdminAddProduct.php" class="nav-item nav-link active">Add Products</a>
                                    <a href="PlaceOrder.php" class="nav-item nav-link active">Placed Orders</a>
                                </div>
                                <div class="navbar-nav ms-auto">
                                    <a href="home.php?logout='1'" class="nav-item nav-link active">Logout </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
</body>
</body>
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


    <div class="list">
        <div class="box">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ProductID</th>
                        <th scope="col">ProductName</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

    <?php


        $dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
        if(mysqli_connect_errno()){
            echo 'could not connect to server.';
        }

        $sql = "SELECT * From product;" ;
        $result = mysqli_query($dbCart,$sql) or die("Error in $sql");
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck>0):
        while ($row = mysqli_fetch_assoc($result)):

    ?>
                <tbody>
                    <tr>
                        <th><?php echo $row['ProductID']; ?></th>
                        <td><?php echo $row['ProductName']; ?></td>
                        <td><?php echo $row['Quantity']; ?></td>
                        <td><?php echo $row['Rating']; ?></td>
                        <td><a href="AdminDeleteProduct.php?deleteID=<?php echo $row['ProductID']; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                </tbody>

                <?php
                        endwhile;
                    endif;
                ?>

            </table> 
             <div class="link-right">
                <a href=""></a>
             </div>
        </div>
    </div>
</html>