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
                                <img src="Images/Logo.png" height="35px" alt="Simplybuy">
                            </a>
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav">
                                    <a href="home.php" class="nav-item nav-link active">Home</a>
                                    <a href="AdminProfile.php" class="nav-item nav-link active">Add Products</a>
                                    <a href="AdminProfile.php" class="nav-item nav-link active">Remove Products</a>
                                </div>
                                <div class="navbar-nav ms-auto">
                                    <a href="home.php?logout='1'" class="nav-item nav-link active">Logout </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </body>

            </html>

    <?php

        $dbCon = mysqli_connect('localhost','root', '', 'registration');
        if(mysqli_connect_errno()){
            echo 'could not connect to server.';
        }
        $name = $_SESSION["username"];
        $sql = "SELECT * From admin WHERE Name = '$name';" ;
        $result = mysqli_query($dbCon,$sql) or die("Error in $sql");
        $row = mysqli_fetch_assoc($result);

    ?>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent text-center">
                            <?php echo "<img class='profile_img' src = '{$row['img_dir']}' width = 50% >"; ?>
                            <h3><?php echo $row['Name']; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card shadow-lg">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Admin Info</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Name</th>
                                    <td width="2%">:</td>
                                    <td><?php echo $row['Name']; ?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Email</th>
                                    <td width="2%">:</td>
                                    <td><?php echo $row['Email']; ?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Phone</th>
                                    <td width="2%">:</td>
                                    <td><?php echo $row['PhoneNumber']; ?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Location</th>
                                    <td width="2%">:</td>
                                    <td><?php echo $row['Address']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div style="height: 26px"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>