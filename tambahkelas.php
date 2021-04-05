<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
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
        color: blue;
      }
	  h2 {
        text-transform: uppercase;
        color: blue;
      }
	  h3 {
        text-transform: uppercase;
        color: blue;
      }
	  h5 {
        text-transform: uppercase;
        color:#999999;
      }
    button {
          background-color: blue;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: blue;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
	  a {
          background-color: blue;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
<body>

  <?php
  include ('header.php');
?>
      <center>
        <h2>Tambah kelas</h2>
      <center>
      <form method="POST" action="proses_tambahkelas.php" enctype="multipart/form-data" >
      <section class="base">
          <div>
          <label>id kelas</label>
         <input type="text" name="id_kelas" autofocus="" required=""/>
        </div>

          <div>
          <label>nama kelas</label>
          <input type="text" name="nama_kelas" autofocus="" required="" />
        </div>

        <div>
          <label>kompetensi keahlian</label>
         <input type="text" name="kompetensi_keahlian" autofocus="" required=""/>
        </div>

        
        <div>
         <button type="submit">Simpan kelas</button>
        </div>
        </section>
      </form>
</body>
</html>