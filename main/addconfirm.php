<?php
session_start();
require_once "../Database/Database.php";

if ($_POST['name'] != null && $_POST['value'] != null) {
    $sql = "INSERT INTO product(name,value) VALUES ('" . trim($_POST['name']) . "' , '" . trim($_POST['value']) . "') ";
    if ($conn->query($sql)) {
        echo "<script>alert('เพิ่มรายการสินค้าสำเร็จ');</script>";
        header("Refresh:0 , url=index.php");
        exit();
    } else {
        echo "<script>alert('เพิ่มรายการสินค้าไม่สำเร็จ กรุณากรอกข้อมูลใหม่');</script>";
        header("Refresh:0 , url=add.php");
        exit();
    }
    echo $_POST['text_todo'];
} else {
    echo "<script>alert('กรุณากรอกข้อมูลครบถ้วน');</script>";
    header("Refresh:0 , url=add.php");
    exit();
}
