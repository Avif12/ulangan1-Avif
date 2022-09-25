<?php

include 'koneksi.php';

$nama= $_POST['nama'];
$email= $_POST['email'];
$no_telepon= $_POST['no_telepon'];
$pekerjaan= $_POST['pekerjaan'];




 mysqli_query($dbconnect, "INSERT INTO kontak VALUES ( NULL, '$nama','$email','$no_telepon','$pekerjaan')");

 header("location:user.php")
 ?>