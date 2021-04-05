<?php
include('koneksi.php'); 
//agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: DarkTurquoise;
      }
	  h5 {
        text-transform: uppercase;
        color:#999999;
      }
    table {
      border: solid 1px #8A2BE2;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #E6E6FA;
        border: solid 1px #E6E6FA;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: DarkTurquoise;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
<body>
  <?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=belummasuk");
	}

	?>
	<?php
	if($_SESSION['level']=="admin"){
	?>
	<h1 align="center">DASHBOARD ADMIN</h1>

	<p align="center"><h5 align="center">Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></h5></b></p>
  <p align="center"><a href="spp.php">SPP</a>
	<a href="kelas.php">KELAS</a> 
	<a href="petugas.php">PETUGAS</a> 
	<a href="siswa.php">SISWA</a> 
	<a href="transaksi.php">TRANSAKSI PEMBAYARAN</a> 
	<a href="laporan.php">LAPORAN</a>  
  <a href="logout.php">LOGOUT</a> </p>
<?php 
}

else if($_SESSION['level']=="petugas"){

   ?>
   <h1 align="center">DASHBOARD PETUGAS</h1>

	<p align="center"><h5 align="center">Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></h5></b></p>
	
	<div align="center"><a href=#>TRANSAKSI PEMBAYARAN</a> 
	  
	    <a href="logout.php">LOGOUT</a> 
	  </p>
	<?php 
}

else if($_SESSION['level']=="siswa"){

   ?>
   <h1 align="center">APLIKASI PEMBAYARAN SPP SMK MAHARDHIKA</h1>

	<p align="center"><h5 align="center">Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></h5></b></p>
	
	<div align="center"><a href="history.php">HISTORY TRANSAKSI PEMBAYARAN</a> 
	  
	    <a href="logout.php">LOGOUT</a> 
	  </p>
	    <?php
	}
	
	
	?>
	
    </div>
</body>
</html>