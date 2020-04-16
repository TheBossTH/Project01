<?php
session_start();
require_once "./Database/Database.php";
$username = mysqli_real_escape_string($conn, $_POST['username']);
$sqlchack = "SELECT username FROM user WHERE username='" . $username . "' ";
$query = mysqli_query($conn, $sqlchack);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);

if ($result) {
    echo "<script>alert('ชื่อผู้ใช้งานนี้มีอยู่แล้วในระบบ');</script>";
    header("Refresh:0 , url=register.php");
    exit();
}

if ($_POST['username'] != null && $_POST['password'] == $_POST['cf-password'] && $_POST['namesurname'] != null) {
    $sql = "INSERT INTO user(username,password,namesurname) VALUES ('" . trim($_POST['username']) . "' , '" . trim(md5($_POST['password'])) . "' , '" . trim($_POST['namesurname']) . "') ";
    if ($conn->query($sql)) {
        echo "<script>alert('สมัครสมาชิกสำเร็จ');</script>";
        header("Refresh:0 , url=index.html");
        exit();
    } else {
        echo "<script>alert('สมัครสมาชิกไม่สำเร็จ กรุณากรอกข้อมูลใหม่');</script>";
        header("Refresh:0 , url=register.php");
        exit();
    }
    echo $_POST['text_todo'];
} else {
    echo "<script>alert('กรุณากรอกข้อมูลครบถ้วน หรือรหัสผ่านไม่ตรงกัน');</script>";
    header("Refresh:0 , url=register.php");
    exit();
}
