

<!--- END OF PHP -->


<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->

<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cyclereng</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/tab.css">


<script src="js/jquery_new.min.js"></script> 
<link rel="stylesheet" href="css/animate.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
</head>
<style>
.banner {
  background-position: center top;
  background-image: url(images/speda1.jpg);
  
  background-repeat: no-repeat;
  -moz-background-size:cover;
  -o-background-size: cover;
  -webkit-background-size: cover;
  background-size: 1400px;

  min-height: 200px;
}
</style>
<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a href="home.html"><img  src="images/logo-cycle.png" width="200px" height="60px" ></a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="home.html">Beranda</a></li>
          
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Masuk Sebagai Penyedia</button>
</li>
     
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
  
</section>
<!-- header section -->







<!-- trigger button -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">Masuk Sebagai Penyedia</h4>
        </div>
        <div class="modal-body">
        <form action="proses_login.php" method="POST">
        <p align="center">Username : <input type="text" name="username" required="required" placeholder="Masukkan username"></p> 
        <p align="center">Password : <input type="password" name="password" required="required" placeholder="Masukkan Password"></p>
        <a href="info.html#penyedia"><p align="right" >Apa itu Penyedia?</br></a>
        <br>Belum Punya Akun? <a href="info.html">Daftar</br></a>
        
        </div>
        <div class="modal-footer">
         <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->

         
          <input class="btn"  id="masuk" name="submit" type="submit" value="Masuk" ></input>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  






<!-- WOOI -->
<tr>

</tr>

</tbody>


<!-- Proses Popup-->

      <!-- Modal content-->

        
  
<!--End of Proses Popup-->

<!-- bukti tambah -->
<div class="modal fade" id="Sewa" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">Masukkan data pada Form isian </h4>
        </div>
        <div class="modal-body">
 
        </div>
        <div class="modal-footer">
       <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>
      </div>
      
    </div>
  </div>

<!-- bukti tambah -->



</table>    
 







</div>

<h4 align="center">
Terimakasih karena telah menggunakan jasa kami</h4>

</a><h3 align="center">Detail Pemesanan</h1>

<?php
// Load file koneksi.php

$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "cyclereng");
$maxID = "SELECT MAX(id) FROM tbl_hasil_penyewaan_motor";
$sqlID = mysqli_query($connect, $maxID);
$dataID = mysqli_fetch_array($sqlID);
$id=$dataID['MAX(id)'];
$querys = " SELECT * FROM tbl_hasil_penyewaan_motor WHERE id = $id ";

$sqls = mysqli_query($connect, $querys); // Eksekusi/Jalankan query dari variabel $query
$rows = mysqli_num_rows($sqls); // Ambil jumlah data dari hasil eksekusi $sql

if($rows > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
  while($data = mysqli_fetch_array($sqls)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<div class='col-sm-2'></div>";
    echo "<div class='col-sm-8'>";
    echo "

<table align='center' bordercolor='#E9E9E9' border='2' width='800px' cellpadding='2' style='margin-right: 0px;'>
";
echo "<tr>";
echo "<td colspan=4><h4><b>Data sewa</b></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h5><b>Nama Sepeda Motor   &nbsp; &nbsp;  : </b></td><td><h5><b>".$data['Kode_unik']."</b></td><td><h5><b>Nama penyedia : </b></td><td><h5><b>Relita Manik</b></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h5><b>Jenis Sepeda Motor &nbsp;  &nbsp; : </b></td><td><h5><b>Motor Matic </b></td><td><h5><b>Alamat : </b></td><td><h5><b>Jln.Sosor Galung No.10,<br>Tuktuk Siadong</b></td>";
echo "</tr>";

echo "<tr>";
echo "<td><h5><b></b></td><td><h5><b></b></td><td><h5><b>Nomor telepon  : </b></td><td><h5><b>085366998956</b></td>";
echo "</tr>";


echo "</table>";
echo "<br>";


    // echo "<td><p align='left'>Nama Penyedia   :".$data['nama_penyewa']."</p></td>";

    // echo "<td><p align='left'>Alamat     : ".$data['No_HP']."</td>";
    // echo "<td><p align='left'>Nomor HP    :".$data['No_KTP']."</p></td>";
    echo "<br>";
    echo "<h4>Informasi tambahan</h4>";
    echo "<ol><li><p >Penyedia akan menginformasikan lebih lanjut melalui SMS ke nomor yang telah Anda kirim.</p>
    <li><p>Jika ingin membatalkan (<i>Cancel</i>) pesanan, dapat menghubungi nomor handphone penyedia yang tertera diatas</p> 
<li><p>Untuk pengambilan Sepeda Motor/Sepeda Motor motor yang akan  disewakan, anda dapat <i>Screenshot</i> halaman ini sebagai bukti penyewaan </p>          
<li><p>Jika Penyedia belum mengkonfirmasi pesanan, maka dapat mengirim SMS ke Penyedia melalui tombol 'Kirim SMS ke Penyedia' </p>          



";
echo "           
                 
                 <form action='https://rest.nexmo.com/sms/json?api_key=f7dce1f0&api_secret=b0382fc95f1929a0&to=6282368455879&from='Andrey'&text'Penyewa Dengan_Nomor_HandPhone_:_6281362141757_Belum_dikonfirmasi,_Silahkan_lakukan_konfirmasi pemesanan' '>
                 <p align ='center'>
                 <input type='submit' name='kirim' value='Kirim SMS ke Penyedia' class='btn btn info'>   </p>
                 </form> ";
echo "</div>";
    
  }
}


?>
      
</div>
</a>

</div>


<br>
<br>

<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>


<!-- IOOW-->







    

    
    <!--

      <div class="col-md-4 col-sm-6 services text-center"> <div class="kotak"><center>
      <img src="images/cy1.png" class="img-responsive" alt="Apple" height="100px" width="200px"></center>

        <div class="services-content">
          <h5>Sepeda Motor </h5>
          <h6>Rp.40.000</h6>
          <span class="glyphicons glyphicons-motorcycle"></span>
          <p>Penyedia : GDP Labs</p>
          <p>Alamat    :</p>
          <p>Deskripsi  : bsfkjasjfsjkfbgsdgfjgjkgjgjgkjgj</p>
          <div class="button"><a href="#popup"><b>SEWA</b></a></div>

        </div>



      </div>
      </div>

-->
<!--- PHP -->





<!--- PHP -->



            </form>

        </div>
      </div>







<style >
  .kotak{
    background-color: #fcfcfc;

  }
  .kotak:hover{
    background-color: #f1f6f3;
  }
</style>
<!--

      <div class="col-md-4 col-sm-6 services text-center">
      <div class="kotak">
      <center> <img src="images/speda1.jpg" class="img-responsive" alt="Apple" height="100px" width="200px"></center>

        <div class="services-content">
          <h5>Sepeda Motor </h5>
          <h6>Rp.40.000</h6>
          <span class="glyphicons glyphicons-motorcycle"></span>
          
           <p>Penyedia : GDP Labs</p>
          <p>Alamat    :</p>
          <p>Deskripsi  : bsfkjasjfsjkfbgsdgfjgjkgjgjgkjgj</p>
          <div class="button"><a href="#popup"><b>SEWA</b></a></div>


        </div>
      </div>
      </div>

      <div class="col-md-4 col-sm-6 services text-center"> 
      <div class="kotak"><center> <img src="images/speda2.jpg" class="img-responsive" alt="Apple" height="100px" width="200px"></center>

        <div class="services-content">
          <h5>Sepeda Motor </h5>
          <h6>Rp.40.000</h6>
          <span class="glyphicons glyphicons-motorcycle"></span>
          <p>Penyedia : GDP Labs</p>
          <p>Alamat    :</p>
          <p>Deskripsi  : bsfkjasjfsjkfbgsdgfjgjkgjgjgkjgj</p>
         
          <div class="button"><a href="#popup"><b>SEWA</b></a></div>
        </div>
      </div>
      </div>
      
      <div class="col-md-4 col-sm-6 services text-center">
      <div class="kotak"> <center> <img src="images/speda3.jpg" class="img-responsive" alt="Apple" height="100px" width="200px"></center>

        <div class="services-content">
          <h5>Sepeda Motor </h5>
          <h6>Rp.40.000</h6>
            <p>Penyedia : GDP Labs</p>
          <p>Alamat    :</p>
          <p>Deskripsi  : bsfkjasjfsjkfbgsdgfjgjkgjgjgkjgj</p>
          <input type="submit" name="kirim" value="Sewa" class="btn btn-primary">
        </div>
      </div>
      </div>

      <div class="col-md-4 col-sm-6 services text-center">
      <div class="kotak"> <center> <img src="images/cy1.png" class="img-responsive" alt="Apple" height="100px" width="200px"></center>

        <div class="services-content">
         <h5>Sepeda Motor </h5>
          <h6>Rp.40.000</h6>
           <p>Penyedia : GDP Labs</p>
          <p>Alamat    :</p>
          <p>Deskripsi  : bsfkjasjfsjkfbgsdgfjgjkgjgjgkjgj</p>
          <input type="submit" name="kirim" value="Sewa" class="btn btn-primary">
        </div>
      </div>
      </div>

      <div class="col-md-4 col-sm-6 services text-center"><div class="kotak"> <center> <img src="images/cy1.png" class="img-responsive" alt="Apple" height="100px" width="200px"></center>

        <div class="services-content">
         <h5>Sepeda Motor </h5>
          <h6>Rp.40.000</h6>
           <p>Penyedia : GDP Labs</p>
          <p>Alamat    :</p>
          <p>Deskripsi  : bsfkjasjfsjkfbgsdgfjgjkgjgjgkjgj</p>
          <input type="submit" name="kirim" value="Sewa" class="btn btn-primary">
        </div>
      </div>
-->      
    </div>
  </div>
</section>



<!--
<section id="services" class="services service-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-strategy"></span>
        <div class="services-content">
          <h5>Cepat, Mudah, & Teratur</h5>
          <p>Informasi dan jasa yang disediakan kepada Anda tidak mempersulit dalam mencari informasi dan melakukan pemesanan.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-briefcase"></span>
        <div class="services-content">
          <h5>Aman & Terpercaya</h5>
          <p>Informasi mengenai user dijamin aman bersama kami.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-trophy"></span>
        <div class="services-content">
          <h5>Harga yang jujur</h5>
          <p>Harga yang tertera langsung dari pemilik rental dan sudah terverifikasi</p>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<!-- Footer section -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-6">
          <h5>Kontak pengembang</h5>
          <p>Institut Teknologi Del,Jalan.Sisimangaraja KM 23,Laguboti, Kabupaten Toba Samosir <br>
            Nomor HP : 08647547433<br>
            Email    :andreycls24@gmail.com</p>
         
        </div>
        <div class="footer-col col-md-3">
          <h5>Layanan</h5>
          <p>
          <ul>
            <li><a href="#">Penyewaan Sepeda Motor</a></li>
            <li><a href="#">Penyewaan Sepeda Motor Motor</a></li>
          </ul>
          </p>
        </div>
        <div class="footer-col col-md-3">
          <h5>CYCLERENG.ID</h5>
          <ul class="footer-share">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- footer top --> 
  
</footer>
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>

<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery-1.11.1.min" ></script>

<script>  

            // Parse URL Queries Method
            (function ($) {
                $.getQuery = function (query) {
                    query = query.replace(/[\[]/, '\\\[').replace(/[\]]/, '\\\]');
                    var expr = '[\\?&]' + query + '=([^&#]*)';
                    var regex = new RegExp(expr);
                    var results = regex.exec(window.location.href);
                    if (results !== null) {
                        return results[1];
                    } else {
                        return false;
                    }
                };
            })(jQuery);

            $(function () {

                // Change URIs
               
                // Set theme based on URI
                 if ($.getQuery('theme') === 'image') {
                    $(function () {
                        $.scrollUp({
                            animation: 'fade',
                            scrollImg: {
                                active: true,
                                type: 'background',
                                src: 'images/up.png'
                            }
                        });
                    });
                    $('#scrollUpTheme').attr('href', 'css/themes/image.css?1.1');
                    $('.image-switch').addClass('active');
                } else {
                    $(function () {
                        $.scrollUp({
                            animation: 'slide',
                            
                        });
                    });
                    $('#scrollUpTheme').attr('href', 'css/themes/tab.css?1.1');
                    $('.tab-switch').addClass('active');
                }

                // Toggle overlay
                
            });

        </script>




</body>
</html>
