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

    <title>Crud Operation</title>
</head>
<body>

    <div class="container my-5">
        <h1>Users Inserted</h1>
        <div class="m-2">
            <a href="user.php" class="btn btn-danger">Add User</a>
        </div>
        <?php
        if (isset($_GET['data']) && $_GET['data'] == "update") { ?>
                    <p class="text-center alert alert-success  solid alert-dismissible fade show"> are vah thai gayu </p>
                <?php    }
                ?>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <?php
                if (isset($_GET['del'])) {
                    $del_id = $_GET['del'];

                    $del = "DELETE FROM crud WHERE user_id='$del_id'";
                    $res = mysqli_query($con, $del);

                    if ($res) {
                        echo "record deleted!";
                    } else {
                        echo "error";
                    }
                }
                ?>
                <tr>
                    <th scope="col">user_id</th>
                    <th scope="col">user_name</th>
                    <th scope="col">user_email</th>
                    <th scope="col">user_password</th>
                    <th scope="col">user_add</th>
                    <th scope="col">user_phone</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM crud";
                $res = mysqli_query($con, $select);
                while ($row_user = mysqli_fetch_array($res)) {
                    $user_id = $row_user['user_id'];
                    $user_name = $row_user['user_name'];
                    $user_email = $row_user['user_email'];
                    $user_password = $row_user['user_password'];
                    $user_add = $row_user['user_add'];
                    $user_phone = $row_user['user_phone'];
                ?>
                    <tr>
                        <th scope="row"><?php echo $user_id; ?></th>
                        <td><?php echo $user_name; ?></td>
                        <td><?php echo $user_email; ?></td>
                        <td><?php echo $user_password; ?></td>
                        <td><?php echo $user_add; ?></td>
                        <td><?php echo $user_phone; ?></td>
                        <td><a class="btn btn-primary" href="view-user.php?del=<?php echo $user_id; ?>">Delete</a></td>
                        <td><a class="btn btn-primary" href="Update-user.php?upd=<?php echo $user_id; ?>">Update</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>