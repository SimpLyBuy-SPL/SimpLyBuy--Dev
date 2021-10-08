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

        header('location:AdminProfile.php');

	}

?>