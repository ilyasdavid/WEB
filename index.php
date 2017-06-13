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


		      <div class="left" >
               <img src="https://s-media-cache-ak0.pinimg.com/originals/0d/cd/6f/0dcd6f4e410a34465a2d611913199e50.gif"><br><p>Search : </p>
              <form><input class="search" type="text" placeholder="Cari..." required><input class="button" type="button" value="Cari"></form>
               </div>
		      <div class="middle">
  
                  <table>
                  <h3 align="center">Tempat - tempat Wisata di Lampung</h3>
              <?php
                include "koneksi.php";
                $kueri = "SELECT id,judul,tanggal,sinopsis,isi,gambar FROM tb_view";
                $tampil = mysqli_query($con, $kueri); 
                while ($data = mysqli_fetch_array($tampil))   
                {
                $id = $data[0];
                  $judul = $data[1];
                  $tanggal = $data[2];
                  $sinopsis = $data[3];
                $isi = $data[4];
                $gambar = $data[5];

                
              ?>
                <tr>
                  <td><font color="blue"><h2><?=$judul?></h2></font></td>
                </tr>
                <tr>
                  <td><h4><?=$tanggal?></h4></td>
                </tr>
                <tr>
                  <td><img src="<?=$gambar?>"></td>
                </tr>
                <tr>
                  <td colspan="2"><?=$sinopsis?></td>
                </tr>
                <tr>
                  <td colspan="2" align="right"><a href="ditel.php?id=<?php echo $data['id'];?>">(baca selengkapnya)</a><br>
                  <p>=================================================</p>
                  </td>
                </tr>

              <?php
              }
              ?>
            </table>
              </div>



		      <div class="right" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx5XHwOLPtC_hXm75pJdyPBpCCWvZLGvvCw9RyHlom6PJOi1Kt0w'); background-repeat: no-repeat;
            background-position: center;">
            <p style="text-align: center;">
            <b>Menu</b><br/></p>
            <p>
            <a href="login.php">Log-in</a><br>
            </p>
        
	       </div>
	       <div class="footer"><img src="535limg\footer.jpg" width="100%">
         </div>
        </div>

    </body>
</html>
