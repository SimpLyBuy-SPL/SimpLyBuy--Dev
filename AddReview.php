<?php include('SimplyBuyServer.php'); ?>
<?php 

	$feedback =  $_POST['feedback'];
	$dbCon = mysqli_connect('localhost','root', '', 'registration');
    if(mysqli_connect_errno()){
        echo 'could not connect to server.';
    }
    $name = $_SESSION["username"];
    $sql = "UPDATE user SET Review = '$feedback' WHERE UserName = '$name';" ;
    $result = mysqli_query($dbCon,$sql) or die("Error in $sql");

    header('location:UserProfile.php');

?>