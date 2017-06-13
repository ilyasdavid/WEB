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
          <form name="form1" method="post" action="aksiedit.php">  
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
                <td>
                <input name="id" type="hidden" placeholder="id..." size="30" maxlength="30 v" value="<?php echo $dataTampil['id']; ?>">
                <input type="text" name="judul" placeholder="Judul..." size="30" maxlength="30 v" value="<?php echo $dataTampil['judul']; ?>">
                </td>  
              </tr>  
              <tr>   
                <td>
                <input name="id" type="hidden" placeholder="id..." size="30" maxlength="30 v" value="<?php echo $dataTampil['id']; ?>">
                <textarea name="sinopsis" placeholder="Sinopsis.." rows="4" cols="50" value="<?php echo $dataTampil['sinopsis']; ?>"></textarea>
                </td>  
              </tr>  
              <tr>   
                <td>
                <input name="id" type="hidden" placeholder="id..." size="30" maxlength="30 v" value="<?php echo $dataTampil['id']; ?>">
                <textarea name="isi" placeholder="isi.." rows="4" cols="50" value="<?php echo $dataTampil['isi']; ?>"></textarea>
                </td>  
              </tr>  
              <tr>   
                <td>
                <input name="id" type="hidden" placeholder="id..." size="30" maxlength="30 v" value="<?php echo $dataTampil['id']; ?>">
                <textarea name="gambar" placeholder="gambar.." rows="4" cols="50" value="<?php echo $dataTampil['gambar']; ?>"></textarea>
                </td>  
              </tr> 
              <tr><td>
              <input type="submit" name="Submit" value="Perbaharui">
              </td></tr>
              </table> 
              </form>
              </div>
          <div class="right" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx5XHwOLPtC_hXm75pJdyPBpCCWvZLGvvCw9RyHlom6PJOi1Kt0w'); background-repeat: no-repeat;
            background-position: center;">
            <p style="text-align: center;">
            <b>Menu</b><br/></p>
            
          <a href=indexadmin.php>Menu Utama</a><br>
          <a href="logout.php">Logout</a><br>
          <a href="input.php">input</a><br>
          <a href="register.php">Daftar Admin Baru</a><br>
         </div>
        <div class="footer"><img src="535limg\footer.jpg" width="100%"></div>
        </div>

    </body>
</html>
