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
<?php
	$judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $sinopsis = $_POST['sinopsis'];
    $lokasi = $_POST['gambar'];
    $tanggal = date("Y-m-d");
	include "koneksi.php";
	$kueri = "insert into tb_view(judul,tanggal,sinopsis,isi,gambar) values ('$judul','$tanggal','$sinopsis' ,'$isi','$lokasi')";
	mysqli_query($con, $kueri); 
	echo "<center>Data Berhasil Di Simpan<center>";  
	echo "<center><h3>
	<a href=index.php>
	Kembali
	</a></h3></center>"; 
	echo $tanggal.$judul;
	
?>
</div>
              <div class="right" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx5XHwOLPtC_hXm75pJdyPBpCCWvZLGvvCw9RyHlom6PJOi1Kt0w'); background-repeat: no-repeat;
            background-position: center;">
            <p style="text-align: center;">
            <b>Menu</b><br/></p>
            <p>
            <a href="login.php">Log-in</a><br>
            </p>
           </div>
          <div class="footer"><img src="535limg\footer.jpg" width="100%"></div>
        </div>

    </body>
</html>
