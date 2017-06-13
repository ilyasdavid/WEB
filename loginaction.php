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
// menjalankan session
session_start();

$username = $_POST['username'];
$password = $_POST['pass'];

include "koneksi.php";

// mencari password terenkripsi berdasarkan username
$query = "SELECT * FROM tbl_user WHERE username = '$username'";
$hasil = mysqli_query($con, $query) or die("Error");
$data  = mysqli_fetch_array($hasil);

$pengacak  = "test";

// cek kesesuaian password terenkripsi dari form login
// dengan password terenkripsi dari database
if ((md5($pengacak . md5($password) . $pengacak)) == $data['password'])
{
    // jika sesuai, maka buat session untuk username
    $_SESSION['username'] = $username;

	// menampilkan menu ke halaman akses
	echo "<h2>Login sukses</h2>";
  echo "<h3>Selamat Datang ".$username."</h3>";
	//echo "<p><a href=\"indexadmin.php\">Halaman Muka Admin</a> | <a href=\"input.php\">Input Data Baru</a></p>";
}
else echo "<h2>Login Gagal</h2>";

?>
</table> 

              </div>
		      <div class="right" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx5XHwOLPtC_hXm75pJdyPBpCCWvZLGvvCw9RyHlom6PJOi1Kt0w'); background-repeat: no-repeat;
            background-position: center;">
            <p style="text-align: center;">
            <b>Menu</b><br/></p>
            
          <a href=indexadmin.php>Menu Utama</a><br>
          <a href="logout.php">Logout</a><br>
          <a href="input.php">input</a><br>
          <a href="update.php">Edit</a><br>
          <a href="register.php">Daftar Admin Baru</a><br>
	       </div>
	       <div class="footer"><img src="535limg\footer.jpg" width="100%"></div>
        </div>

    </body>
</html>
