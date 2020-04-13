<?php
session_start();
if ($_SESSION['username'] == null) {
    echo "<script>alert('กรุณาเข้าสู่ระบบ');</script>";
    header("Refresh:0 , url=../index.html");
}
$username = $_SESSION['username'];

$email = $_POST['username'];
$password = trim($_POST['password']);
$address = $_POST['address'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$zip = $_POST['zip'];
echo "Email : " . $email . " Password : " . md5($password) . "<br> Address : " . $address . "<br> Address2 : " . $address2 . "<br> City : " . $city . " ZIP : " . $zip;
