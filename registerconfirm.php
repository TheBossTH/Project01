<<<<<<< HEAD
<?php
session_start();
require_once "./Database/Database.php";

if ($_POST['username'] != null && $_POST['password'] == $_POST['cf-password'] && $_POST['namesurname'] != null) {
    $sql = "INSERT INTO user(username,password,namesurname) VALUES ('" . trim($_POST['username']) . "' , '" . trim(md5($_POST['password'])) . "' , '" . trim($_POST['namesurname']) . "') ";
    if ($conn->query($sql)) {
        echo "<script>alert('สมัครสมาชิกสำเร็จ');</script>";
        header("Refresh:0 , url=index.html");
    } else {
        echo "<script>alert('สมัครสมาชิกไม่สำเร็จ กรุณากรอกข้อมูลใหม่');</script>";
        header("Refresh:0 , url=register.php");
    }
    echo $_POST['text_todo'];
} else {
    echo "<script>alert('กรุณากรอกข้อมูลครบถ้วน หรือรหัสผ่านไม่ตรงกัน');</script>";
    header("Refresh:0 , url=register.php");
}
=======
<?php
session_start();
require_once "../Database/Database.php";

if ($_POST['text_todo'] != null) {
    $sql = "INSERT INTO todos (todo) VALUE ('" . trim($_POST['text_todo']) . "') ";
    if ($conn->query($sql)) {
        echo "<script>alert('บันทึกสำเร็จ');</script>";
        header("Refresh:0 , url=index.html");
    } else {
        echo "<script>alert('บันทึกไม่สำเร็จ');</script>";
        header("Refresh:0 , url=register.php");
    }
    echo $_POST['text_todo'];
} else {
    echo "<script>alert('กรุณากรอกข้อมูล');</script>";
    header("Refresh:0 , url=register.php");
}
>>>>>>> 965c4f61260a0c2b1db2ecb151a59700c8219501
