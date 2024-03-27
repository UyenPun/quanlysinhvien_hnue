<?php

// $conn= new mysqli('localhost','root','','student_attendance_db')or die("Could not connect to mysql".mysqli_error($con));

// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$database = "student-attendance";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("conn failed: " . $conn->connect_error);
}
 ?>