<?php
	include('SimplyBuyServer.php');

	if(isset($_POST['setUserImage'])){
		$imageName = $_FILES['image']['name'];
		$target = 'UserImage/'. $imageName;
		move_uploaded_file($_FILES['image']['tmp_name'], $target);
		$dbCon = mysqli_connect('localhost','root', '', 'registration');
        if(mysqli_connect_errno()){
            echo 'could not connect to server.';
        }
        $user = $_SESSION['username'];
        $sql = "UPDATE user SET img_dir = '$target' WHERE user.UserName = '$user'; ";
        mysqli_query($dbCon,$sql) or die("Error in $sql");
        header('location:UserProfile.php');

	}

?>