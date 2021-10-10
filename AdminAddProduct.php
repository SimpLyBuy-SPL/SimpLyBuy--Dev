<?php 

	if(isset($_POST['save'])){

		$name = $_POST['productName'];
		$category = $_POST['productCategory'];
		$quantity = $_POST['productQuantity'];
		$price = $_POST['productPrice'];
		$details = $_POST['productDetails'];
		$imageName = $_FILES['productImage']['name'];

		$target = 'Web/'. $imageName;
		move_uploaded_file($_FILES['productImage']['tmp_name'], $target);

		$dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
        if(mysqli_connect_errno()){
            echo 'could not connect to server.';
        }

        $sql = "INSERT INTO product (ProductName,Category,Quantity,Price,img_dir,Details) VALUES ('$name','$category', '$quantity', '$price', '$target', '$details');" ;
        $result = mysqli_query($dbCart,$sql) or die("Error in $sql");

        header('location:AdminAddProduct.php');

	}

?>

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
                                    <a href="#addProduct" class="nav-item nav-link active">Add Products</a>
                                    <a href="AdminProfile.php" class="nav-item nav-link active">Products List</a>
                                    <a href="AdminProfile.php" class="nav-item nav-link active">Placed Orders</a>
                                </div>
                                <div class="navbar-nav ms-auto">
                                    <a href="home.php?logout='1'" class="nav-item nav-link active">Logout </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="container" id="addProduct">
                <div class="row">
                    <div class="col-4 offset-md-4 form-div">
                        <div class="col-lg-30">
                            <div class="card shadow-lg p-3 mb-10 bg-yellow rounded">
                                <form action="AdminAddProduct.php" method="post" enctype="multipart/form-data">

                                    <h3 class="text-center">Add Product</h3>

                                    <div class="form-group">
                                        <label for="profileImage">Product Image</label>
                                        <input cols="43" type="file" name="productImage" id="profileImage" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Category">Product Name</label>
                                        <textarea name="productName" id="" cols="36" rows="2"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="Category">Choose Category</label>
                                    

                                    <select class="form-select" name=" productCategory" aria-label="Default select example">
                                        <option selected>Choose a category for the product</option>
                                        <option value="1">elctronicDevices</option>
                                        <option value="2">homeApplience</option>
                                        <option value="3">fashionClothing</option>
                                        <option value="4">healthCare</option>
                                        <option value="5">sports</option>
                                    </select></div>

                                    <div class="form-group">
                                        <label for="Price">Product Quantity</label>
                                        <textarea name="productQuantity" id="" cols="36" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="img_dir">Product Price</label>
                                        <textarea name="productPrice" id="" cols="36" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Details">Product Details</label>
                                        <textarea name="productDetails" id="" cols="36" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="save" class="btn btn-primary btn-block">ADD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


            </body>

            </html>

        </div>

    </div>

</body>

</html>