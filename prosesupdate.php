<?php

 include 'koneksi.php';
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $no_telepon = $_POST['no_telepon'];
  $pekerjaan = $_POST['pekerjaan'];
  



  mysqli_query($dbconnect, "UPDATE `kontak` SET `nama` = '$nama', `email` = '$email', `no_telepon` = '$no_telepon', `pekerjaan` = '$pekerjaan' WHERE `kontak`.`id` = '$id' ");
  
  header("location:user.php");
  ?>