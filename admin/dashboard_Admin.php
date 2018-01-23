
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cyclereng</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/flexslider.css">
<link rel="stylesheet" href="../css/jquery.fancybox.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/responsive.css">
<link rel="stylesheet" href="../css/font-icon.css">
<link rel="stylesheet" href="../css/animate.min.css">


<link rel="stylesheet" href="../style.css">

<link rel="stylesheet" href="../swipebox.css">

<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
</head>
<style>
.banner {
  background-position: center top;
  background-image: url(../images/admin.jpg);
  
  background-repeat: no-repeat;
  -moz-background-size:cover;
  -o-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
  min-height: 150px;
}
</style>
<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a href="../home.html"><img  src="../images/logo-cycle.png" width="200px" height="60px" ></a>
    
      <nav class="navigation" role="navigation">

        <ul class="primary-nav">
          <li><a href="../home.html">Beranda</a></li>
          
          
          
          <?php 
            include "../proses_login.php";
             ?>
      <li><a href="#">Selamat datang, <?php echo $_SESSION["username"]; ?></p></a></li>
          
           

          
 <a href="../home.html"><button type="button" class="btn btn-warning btn-lg" >Keluar</button></a>
</li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>


  <!-- banner text -->
  <div class="container">





  

    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <h1>DASHBOARD PENYEDIA</h1>

        <p></p> </div>
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header section --> 





<!-- Pop upnya bro -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">Keluar</h4>
        </div>
        <div class="modal-body">
        <form action="proses_login.php" method="POST">
        <p align="center">Username : <input type="text" name="username" required="required" placeholder="Masukkan username"></p> 
        <p align="center">Password : <input type="password" name="password" required="required" placeholder="Masukkan Password"></p>
        
        <p><br>Belum Punya Akun? <a href="info.html">Daftar</br></a>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <button type="button" class="btn" data-dismiss="modal">Masuk</button>
          <input class="btn btn-default" type="submit" name="submit" value="Kocok"></input>
          <input style= "color:#337AB7;" id="masuk" name="submit" type="submit" value="Masuk" ></input>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  

<!-- End Of Pop upnya bro -->


<section id="services" class="services service-section">

<div id="category-grid">
<div id="category-item">
<?php
// Load file koneksi.php

$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "cyclereng");
$masuk =  $_SESSION['username'];
$querys = " SELECT * FROM tbl_penyedia WHERE `nama_penyedia` = '$masuk' ";
$sqls = mysqli_query($connect, $querys); // Eksekusi/Jalankan query dari variabel $query
$rows = mysqli_num_rows($sqls); // Ambil jumlah data dari hasil eksekusi $sql

if($rows > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
  while($data = mysqli_fetch_array($sqls)){ // Ambil semua data dari hasil eksekusi $sql
   
  }
}
?>
</div></div>




<h1 align="center">Daftar Penyewaan Sepeda</h1>
<section id="services" class="services service-section">
  <div class="container">
    <div class="row">
      

<table align="center" bordercolor="#E9E9E9" border="2" width="1240px" cellpadding="2" style="margin-right: 0px;">
<tr id="mytr">
  <th bgcolor="#B5EFAE" width="175" ><h5 align="center">Nama Penyewa</h3></th>
  <th bgcolor="#B5EFAE" width="204"><h5 align="center">nomor HP</h3></th>
  <th bgcolor="#B5EFAE" width="338"><h5 align="center">Nomor KTP</h3></th>
    <th bgcolor="#B5EFAE" width="292"><h5 align="center">Alamat</h3></th>
    <th bgcolor="#B5EFAE" width="163"><h5 align="center">Banyak Sepeda</h3></th>
   <th bgcolor="#B5EFAE" width="163"><h5 align="center">Kode Unik</h3></th>
    <th bgcolor="#B5EFAE" width="163"><h5 align="center">Konfirmasi</h3></th>
    

</tr>

<?php
// Load file koneksi.php

$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "cyclereng");
$kode = $masuk;
$CrawlKode = (string)$kode."%";

$query = "SELECT * FROM tbl_hasil_penyewaan  WHERE Kode_unik LIKE '$CrawlKode' ORDER BY id DESC "; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><p align='center'>".$data['nama_penyewa']."</p></td>";
    echo "<td><p align='center'>".$data['No_HP']."</p></td>";
    echo "<td><p align='center'>".$data['No_KTP']."</p></td>";
    echo "<td><p align='center'>".$data['Alamat']."</p></td>";
    echo "<td><p align='center'>".$data['banyak_sepeda']."</p></td>";
    echo "<td><p align='center'>".$data['Kode_unik']."</p></td>";

$API_KEY = "38f9cdad" ;
$API_SECRET = "c6c587eb54e70f3c" ;
$FROM = "Cyclereng Developer";

$kueri = "SELECT * FROM tbl_hasil_penyewaan WHERE Kode_unik NOT LIKE 'HasianFixie'  ";
$sqli = mysqli_query($connect, $kueri);
$rows = mysqli_num_rows($sqli);

  while($dta = mysqli_fetch_array($sqli)){

 

}

$text = ' Pesanan anda telah dikonfirmasi , silahkan hubungi Penyedia Relita Manik (081362141757)';
$Action = "https://rest.nexmo.com/sms/json?api_key=f7dce1f0&api_secret=b0382fc95f1929a0&to=6282368455879&from='Andrey'&text='Pesanan_anda_telah_dikonfirmasi,_Silahkan_hubungi_Penyedia_Relita_Manik_(081362141757)_Pesanan_Bisa_diambil_Di_Jalan_Tuktuk_Siadong_Sosorgalung_No_4'";

    echo "<td><p align='right'>
     <form action= $Action  method='POST'>
     &nbsp;
    <input  type='submit' value='Konfirmasi' class='btn btn-lg' /></p></td>
    </form>";

    

    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>




</section>










<h1 align="center">Daftar Penyewaan Sepeda Motor</h1>
<section id="services" class="services service-section">
  <div class="container">
    <div class="row">
      

<table align="center" bordercolor="#E9E9E9" border="2" width="1240px" cellpadding="2" style="margin-right: 0px;">
<tr id="mytr">
  <th bgcolor="#B5EFAE" width="175" ><h5 align="center">Nama Penyewa</h3></th>
  <th bgcolor="#B5EFAE" width="204"><h5 align="center">nomor HP</h3></th>
  <th bgcolor="#B5EFAE" width="338"><h5 align="center">Nomor KTP</h3></th>
    <th bgcolor="#B5EFAE" width="292"><h5 align="center">Alamat</h3></th>
    <th bgcolor="#B5EFAE" width="163"><h5 align="center">Banyak Sepeda</h3></th>
   <th bgcolor="#B5EFAE" width="163"><h5 align="center">Kode Unik</h3></th>
    <th bgcolor="#B5EFAE" width="163"><h5 align="center">Konfirmasi</h3></th>
    

</tr>

<?php
// Load file koneksi.php

$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "cyclereng");

$querys = "SELECT * FROM tbl_hasil_penyewaan_motor ORDER BY id DESC"; // Tampilkan semua data gambar
$sqls = mysqli_query($connect, $querys); // Eksekusi/Jalankan query dari variabel $query
$rows = mysqli_num_rows($sqls); // Ambil jumlah data dari hasil eksekusi $sql

if($rows > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
  while($data = mysqli_fetch_array($sqls)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><p align='center'>".$data['nama_penyewa']."</p></td>";
    echo "<td><p align='center'>".$data['no_HP']."</p></td>";
    echo "<td><p align='center'>".$data['No_KTP']."</p></td>";
    echo "<td><p align='center'>".$data['Alamat']."</p></td>";
    echo "<td><p align='center'>".$data['banyak_motor']."</p></td>";
    echo "<td><p align='center'>".$data['Kode_unik']."</p></td>";

$API_KEY = "38f9cdad" ;
$API_SECRET = "c6c587eb54e70f3c" ;
$FROM = "Cyclereng Developer";

$kueri = "SELECT * FROM tbl_hasil_penyewaan WHERE Kode_unik NOT LIKE 'HasianFixie'  ";
$sqli = mysqli_query($connect, $kueri);
$rows = mysqli_num_rows($sqli);

  while($dta = mysqli_fetch_array($sqli)){

 

}


$Action = "https://rest.nexmo.com/sms/json?api_key=f7dce1f0&api_secret=b0382fc95f1929a0&to=6282368455879&from='Andrey'&text='Pesanan_anda_telah_dikonfirmasi,_Silahkan_hubungi_Penyedia_Relita_Manik_(081362141757)_Pesanan_Bisa_diambil_Di_Jalan_Tuktuk_Siadong_Sosorgalung_No_4'";

    echo "<td><p align='center'>
     <form action= $Action  method='POST'>
     &nbsp;
    <input  type='submit' value='Konfirmasi' class='btn btn-lg' /></p></td>
    </form>";

    

    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>




</section>






































<!-- Footer section -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-6">
          <h5>Hubungi kami</h5>
          <p>Institut Teknologi Del,Jalan.Sisimangaraja ,Kecamatan Laguboti, Kabupaten Toba Samosir <br>
            Nomor HP / WA : 08647547433<br>
            Email    :andreycls24@gmail.com</p>
         
        </div>
        <div class="footer-col col-md-3">
          <h5>Layanan</h5>
          <p>
          <ul>
            <li><a href="#">Penyewaan Sepeda</a></li>
            <li><a href="#">Penyewaan Sepeda Motor</a></li>
          </ul>
          </p>
        </div>
        <div class="footer-col col-md-3">
          <h5>CYCLERENG.ID</h5>
          <ul>
            <li><a href="#">Cycelereng Melayani Jasa Permintaan pemesanan Sepeda dan sepeda Motor di sekitar Tuk Tuk , kami juga menyediakan informasi rute wisata disekitar Samosir</a></li>
          </ul>
          
        </div>  
      </div>
    </div>
  </div>
  <!-- footer top --> 
  
</footer>

<!-- JS FILES --> 
<script src="../js/jquery_new.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flexslider-min.js"></script> 
<script src="../js/jquery.fancybox.pack.js"></script> 
<script src="../js/retina.min.js"></script> 
<script src="../js/modernizr.js"></script> 
<script src="../js/main.js"></script> 
<script type="text/javascript" src="../js/jquery.contact.js"></script>

<script src="../uisearch.js"></script>
<script src="../login.js"></script>
<script src="../jquery.easydropdown.js"></script>
<script src="../jquery.swipebox.min.js"></script>

<script src="../js/jquery.js"></script> 

<script src="../js/jquery-ui.js"></script> 



</body>


<style>
  .rute-wisata{
    background-color: #d9e0e7;
    border-color: #8fc9dc;


  }

  .rute-wisata:hover{
    background-color: #8fc9dc;
  }

  .sewa-sepeda{
    background-color: #d9e0e7;
    border-color: #333;


  }

  .sewa-sepeda:hover{
    background-color: #8fc9dc;
  }

  .sewa-motor{
    background-color: #d9e0e7;
    border-color: #333;


  }

  .sewa-motor:hover{
    background-color: #8fc9dc;
  }
</style>
</html>