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
