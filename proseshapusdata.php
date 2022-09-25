<?php include 'koneksi.php';

$id=$_GET['id'];


mysqli_query($dbconnect, "DELETE FROM kontak WHERE id = '$id'"); 


header("location:user.php");
?>