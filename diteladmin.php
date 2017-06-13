<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="mediaqueries.css">
        <title>Wisata Lampung</title>
        <style type="text/css">
        body {
    background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD6OAWkxUcX45dlckKOaiNAp2IUaNG4SzZ_z37QEFjNGa6s3iY') no-repeat fixed;
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
}
</style>
    </head>
    <body>
        <div class="rio">
	       <div class="header" align="center">
            <img src="535limg\home.jpg" width="100%">
</div>
	       <div class="main">
		      <div class="left">
              <img src="http://signsanddecal.com/images/LoaderA_sign.gif" width="100%"><br><p>Search : </p>
              <form><input class="search" type="text" placeholder="Cari..." required><input class="button" type="button" value="Cari"></form>
              
               </div>
		      <div class="middle">
              <table>
                  <?php
                  include "koneksi.php";
              $id = $_GET['id'];
              $ditel = "SELECT * FROM tb_view where id='$id'";
              $tampil = mysqli_query($con, $ditel);
              $data = mysqli_fetch_array($tampil);
              echo "<td><?=$id?></td>";
              ?>
              <tr>
                    <td align="center"><h2><b><?php echo $data['judul']; ?></td></h2></b>
                  </tr>
                  <tr>
                    <td align="center"><?php echo $data['tanggal']; ?></td>
                  </tr>
                  
                  <tr>
                    <td align="center">
                    <img src=<?php echo $data['gambar'];?>></td>
                  </tr>
                  <tr>
                    <td><?php echo $data['sinopsis']; ?></td>
                  </tr>
                    <tr style="border : 2px solid blue">
                      <td style="border : 2px solid black"><?php echo $data['isi']; ?></td>
                  </tr>
            </table> 

              </div>
		      <div class="right" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx5XHwOLPtC_hXm75pJdyPBpCCWvZLGvvCw9RyHlom6PJOi1Kt0w'); background-repeat: no-repeat;
            background-position: center;">
            <p style="text-align: center;">
            <b>Menu</b><br/></p>
          <a href=indexadmin.php>Menu Utama</a><br>
          <a href="logout.php">Logout</a><br>
          <a href="input.php">input</a><br>
          <a href="update.php?id=<?php echo $data['id'];?>">Edit</a><br>
          <a href="register.php">Daftar Admin Baru</a><br>
	       </div>
	       <div class="footer"><img src="535limg\footer.jpg" width="100%"></div>
        </div>

    </body>
</html>
