<?php
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];

include '../conf/db.php';

$r = mysqli_query($connect, "INSERT INTO `contacts`(`name`, `phone_number`) VALUES ('$name','$phone_number')");
if ($r == 'true') {
    echo "<meta http-equiv='refresh'>";
    header('Location: /index.php');
} else {
    echo "<script>alert('Ошибка')</script>";

}


?>