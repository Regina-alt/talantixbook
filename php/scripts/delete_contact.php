<?php
include("../conf/db.php");

$id_contact = $_GET['id'];

$r = mysqli_query($connect, "DELETE FROM `contacts` WHERE `id_contact`=$id_contact");
if ($r == 'true') {
    echo "<meta http-equiv='refresh'>";
    header('Location: /index.php');
} else {
    echo "<script>alert('Ошибка')</script>";
}
?>