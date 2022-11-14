<?php
require_once('config.php');
if (isset($_POST['submit'])) {

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_add = $_POST['user_add'];
    $user_phone = $_POST['user_phone'];

    // already exist email-->
    $exist = "SELECT * FROM crud WHERE user_email='$user_email'";
    $existsql = mysqli_query($con, $exist);
    $numExist = mysqli_num_rows($existsql);
    if ($numExist > 0) {
        // echo "Email already Exist!";
        echo "<script>alert('Email already Exist!')</script>";
    } else {
        // else insert the query
        $in = "INSERT INTO crud(user_name,user_email,user_password,user_add,user_phone) VALUES('$user_name','$user_email','$user_password','$user_add','$user_phone')";

        if ($con->query($in) === TRUE) {
            echo "Data inserted";
            echo "<script>window.open('view-user.php','_self')</script>";
        } else {
            echo "error";
        }
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Inser User</title>
</head>

<body>

    <div class="container my-5">
        <h1>Register</h1>
        <form method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" autocomplete="off" name="user_name" required />
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Enter email" name="user_email" required />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" autocomplete="off" name="user_password" required />
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Address" name="user_add" required />
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" pattern="^\d{10}$" class="form-control" placeholder="Phone number" name="user_phone" required />
            </div>
            <input type="submit" class="btn btn-primary" name="submit" />
        </form>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>