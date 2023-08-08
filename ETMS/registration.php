<?php
include('include/connection.php');
if (isset($_POST['userRegistration'])) {
    $query = "insert into users values(null,'$_POST[name]', '$_POST[email]', '$_POST[password]', $_POST[mobile])";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo "<script type='text/javascript'>
           alert ('User Registation Success');
           window.location.href = 'index.php';
           </script>
           ";
    } else {
        echo "<script type ='text/javascript'>
        alert('Error..Please try again.');
        window.location.href = 'registration.php';
        </script>
        ";

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETMS | User Registration</title>
    <!-- JQuery File -->
    <script src="inlcude/JQuery.js"></script>
    <!-- <script src="inlcude/JqValidate.js"></script>
    <script scr="include/registration.js"></script> -->
    <!-- Bootstap File -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script scr="bootstrap/js/bootstrap.js"></script>
    <!-- External CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="row">
        <div class="col-md-3 m-auto" id="registration_panel">
            <center>
                <h3><b>User Registration<b></h3>
            </center>
            <form action="" name="register" id="form" method="post">
                <div class="form-group">
                    <input type="text" name="name" id= "name" class="form-control" placeholder="Enter Name" required><br>
                    <input type="email" name="email"  id= "email" class="form-control" placeholder="Enter E-mail" required><br>
                    <input type="password" name="password"  id= "password" class="form-control" placeholder="Enter Password"
                        required><br> 
                    <input type="password" name="repassword"  id= "repassword"class="form-control" placeholder="Confirm Password"
                        required><br>
                    <input type="text" name="mobile"  id= "mobile" class="form-control" placeholder="Enter Phone No." required><br>
                    <div class="form-group">
                        <center> <input type="submit" name="userRegistration" value="Register" class="btn btn-success">
                        </center>
                    </div>
                    <form>
                        <center><a href="index.php" class="btn btn-outline-danger">Home Page</a></center><br>
                    </form>

                </div>

            </form>
        </div>

    </div>
</body>
</html>