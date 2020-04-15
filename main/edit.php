<?php
session_start();
require_once "../Database/Database.php";
if ($_SESSION['username'] == null) {
    echo "<script>alert('กรุณาเข้าสู่ระบบ');</script>";
    header("Refresh:0 , url=../index.html");
}
$username = $_SESSION['username'];
$sql_fatch_products = "SELECT * FROM product ORDER BY id ASC";
$query = mysqli_query($conn, $sql_fatch_products);
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a name="" id="" class="btn btn-danger" href="../logout.php" role="button">LOGOUT</a>
            </form>
        </div>
    </nav>


    <div class="section">
    </div>
    <div class="container">

        <form method="POST" action="editconfirm.php">
            <div class="form-group">
                <h1>แก้ไข</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">รายการ</th>
                            <th scope="col">จำนวน</th>
                            <th scope="col">วันที่ลงทะเบียน</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $idproduct = 0; ?>
                        <?php while ($row = mysqli_fetch_array($query)) { ?>
                            <?php $idproduct += 1; ?>
                            <tr>
                                <th scope="row"><?php echo $idproduct ?></th>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['value'] ?></td>
                                <td><?php echo $row['time'] ?></td>
                                <td><a name="edit" id="" class="btn btn-warning" href="edit.php?id=<?php echo $row['id'] ?>&message=<?php echo $row['name']; ?>" role="button">
                                        แก้ไข
                                    </a></td>
                                <td><a name="id" id="" class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>" role="button">
                                        ลบ
                                    </a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="container">
                <div class="form-group">
                    <label>ชื่อรายการ</label>
                    <input type="text" class="form-control" value="<?php echo $_GET['message']; ?>" name="name" required />
                </div>
                <div class="form-group">
                    <label>จำนวน</label>
                    <input type="text" class="form-control" name="value" required />
                    <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id" />
                </div>
                <button type="submit" class="btn btn-warning">แก้ไข</button>

            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>