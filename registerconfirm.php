<?php
session_start();
if ($_SESSION['username'] == null) {
    echo "<script>alert('กรุณาเข้าสู่ระบบ');</script>";
    header("Refresh:0 , url=../index.html");
}
if ($_POST['old-password'] != null || $_POST['password'] != null || $_POST['cf-password'] != null) {
    if ($_POST['password'] != $_POST['cf-password']) {
        echo "<script>alert('รหัสผ่านยืนยันไม่ตรงกัน');</script>";
        header("Refresh:0 , url=index.php");
        exit();
    }
    require_once "../Database/Database.php";
    $password = md5($_POST['password']);
    $username = $_SESSION['username'];
    $namesername = $_SESSION['name-sername'];

    $sql_same_password = "SELECT password FROM students WHERE username='" . $username . "' ";
    $mysqli_same_password = mysqli_query($conn, $sql_same_password);
    $result_same_password = mysqli_fetch_array($mysqli_same_password, MYSQLI_ASSOC);
    if (md5($_POST['old-password']) != $result_same_password['password']) {
        echo "<script>alert('รหัสผ่านเดิมไม่ถูกต้อง');</script>";
        header("Refresh:0 , url=index.php");
        exit();
    }
    if ($password == $result_same_password['password']) {
        echo "<script>alert('กรุณาเปลี่ยนรหัสผ่านใหม่ เนี่ยงจากรหัสผ่านซ้ำ');</script>";
        header("Refresh:0 , url=index.php");
        exit();
    } else {
        $sql_update = "UPDATE students SET password= '" . $password . "' WHERE username= '" . $username . "' ";
        if (mysqli_query($conn, $sql_update)) {
            echo "<script>alert('เปลี่ยนรหัสผ่านเสร็จสิ้น');</script>";
            header("Refresh:0 , url=index.php");
            exit();
        }
    }
} else {
    echo "<script>alert('กรุณากรอกรหัสผ่าน');</script>";
    header("Refresh:0 , url=./index.php");
    exit();
}
