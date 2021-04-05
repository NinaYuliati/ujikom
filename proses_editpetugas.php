<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = $_POST['id_petugas'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $nama_petugas   = $_POST['nama_petugas'];
  $level   = $_POST['level'];

        $query  = "UPDATE petugas SET id_petugas = '$id_petugas' WHERE id_petugas ='$id' ";
      $query  = "UPDATE petugas SET username = '$username' WHERE id_petugas ='$id' ";
      $query  = "UPDATE petugas SET password = '$password' WHERE id_petugas ='$id' ";
      $query  = "UPDATE petugas SET nama_petugas = '$nama_petugas' WHERE id_petugas ='$id' ";
      $query  = "UPDATE petugas SET level = '$level' WHERE id_petugas ='$id' ";
     $result = mysqli_query($koneksi, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));

      } else {
      echo "<script>alert('Data berhasil diubah.');window.location='petugas.php';</script>";
      }



            			  ?>
