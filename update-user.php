<?php
require_once('config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Update User</title>
</head>

<body>

    <div class="container my-5">
        <h1>Users</h1>
        <?php

        if (isset($_GET['upd'])) {
            $upd_id = $_GET['upd'];

            $select = "SELECT * FROM crud WHERE user_id='$upd_id'";
            $res = mysqli_query($con, $select);
            $row_user = mysqli_fetch_array($res);

            $user_name = $row_user['user_name'];
            $user_email = $row_user['user_email'];
            $user_password = $row_user['user_password'];
            $user_add = $row_user['user_add'];
            $user_phone = $row_user['user_phone'];
        }
        ?>
         <?php
                if (isset($_GET['data']) && $_GET['data'] == "pelethi") { ?>
                    <p class="text-center alert alert-danger solid alert-dismissible fade show"> email pelethi 6</p>
                <?php    }
            ?>
            <?php
                if (isset($_GET['data']) && $_GET['data'] == "error") { ?>
                    <p class="text-center alert alert-danger solid alert-dismissible fade show"> farithi check karo kaik bhil 6</p>
                <?php    }
                ?>

        <form method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" autocomplete="off" name="user_name" value="<?=$row_user['user_name']; ?>">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Enter email" name="user_email" value="<?php echo $user_email; ?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" autocomplete="off" name="user_password" value="<?php echo $user_password; ?>">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Address" name="user_add" value="<?php echo $user_add; ?>">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" class="form-control" placeholder="Phone number" name="user_phone" value="<?php echo $user_phone; ?>">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" />
        </form>
        <?php
        if (isset($_POST['submit'])) {

            $nuser_name = $_POST['user_name'];
            $nuser_email = $_POST['user_email'];
            $nuser_password = $_POST['user_password'];
            $nuser_add = $_POST['user_add'];
            $nuser_phone = $_POST['user_phone'];
            
            $sql = "SELECT * FROM crud WHERE user_email='$nuser_email'";
            $result = $con->query($sql);
            $row = $result->num_rows;
            // var_dump($sql, $result);die();
            var_dump($row, $row==1);
            // var_dump ($row==1 || $row==0);die();
            
            if($row==1 || $row==0){
                $upd = "UPDATE crud SET user_name = '$nuser_name',user_email = '$nuser_email',user_password = '$nuser_password',user_add = '$nuser_add',user_phone = '$nuser_phone' WHERE user_id='$upd_id'";
                $res = mysqli_query($con, $upd);
                if ($res) {
                    header("Location: view-user.php?data=update");
                } else {
                    header("Location: update-user.php?data=error");
                }
            }else {
                header("Location: update-user.php?data=pelethi&upd=$upd_id");
            }
        }
        ?>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>