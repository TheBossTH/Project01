<?php
session_start();
if ($_SESSION['username'] == null) {
    echo "<script>alert('กรุณาเข้าสู่ระบบ');</script>";
    header("Refresh:0 , url=../index.html");
}
$username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../style.css" />
    <title>หน้าหลัก</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="section">
        <h1>สวัสดี : [ <?php echo $username ?> ]</h1>
    </div>
    <div class="container">
        <a name="" id="" class="btn btn-danger" href="../logout.php" role="button">LOGOUT</a>
        <a name="" id="" class="btn btn-primary" href="./todo.php" role="button">TO DO APP</a>
        <form method="POST" action="changePassword.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" value="<?php echo $username ?>" disabled />
                <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Old Password</label>
                <input type="password" class="form-control" name="old-password" />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">New Password</label>
                <input type="password" class="form-control" name="password" />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm New Password</label>
                <input type="password" class="form-control" name="cf-password" />
            </div>
            <button type="submit" class="btn btn-primary">Change Password</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>