
<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
 	 $no   = $_POST['no'];
 	 $id petugas     = $_POST['id_petugas'];
       $username     = $_POST['username'];
   $password     = $_POST['password'];
       $nama petugas     = $_POST['nama_petugas'];
   $level     = $_POST['level'];
                  $query = "INSERT INTO spp VALUES ('','$no', '$id_petugas','$username','password','nama_petugas','level')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='tambahpetugas.php';</script>";
                  }
            ?>