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
  background-image: url(images/info.png);
  
  background-repeat: no-repeat;
  -moz-background-size:cover;
  -o-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
  min-height: 600px;
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
          
          <li><a href="#services">Layanan Kami</a></li>
          <li><a href="../info.html#cara-sewa">Info</a></li>
          <?php 
            include "../proses_login.php";
             ?>
      <li><a href="#">Selamat Datang,<p align="right" style="color:rgb(240, 83, 122); "> <?php echo $_SESSION["username"]; ?></p></a></li>
          
           

          
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
        <h1>SELAMAT DATANG Di CYCLERENG.ID</h1>

        <p></p> </div>
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header section --> 




<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>DASHBOARD PENYEDIA</h3>
      <p>CYCLERENG.ID merupakan Penyedia informasi mengenai Rute perjalanan dan penyewaan sepeda dan sepeda motor untuk daerah Tuk Tuk, Samosir, Sumatera Utara</p>
    </div>
  </div>
</section>
<!-- intro section --> 
<!-- services section -->


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
        <a href="info.html#penyedia"><p align="right" >Apa itu Penyedia?</br></a>
        <br>Belum Punya Akun? <a href="info.html">Daftar</br></a>
        
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
<div class = judul>
<h1>Layanan Kami</h1></div>
<section id="services" class="services service-section">
  <div class="container">
    <div class="row">
      <a href="../penyewaan-sepeda.php">

      <div class="col-md-4 col-sm-6 services text-center"><div class = "sewa-sepeda"> </span>
        <span style="color: #3cb9c1" class  = "fa fa-4x fa-bicycle"></span>

        <div class="services-content">
          <h5>Penyewaan Sepeda</h5>
          <p style="color: #3f3939;">Informasi penyewaan Sepeda di sekitar Tuk Tuk</p>
          <br>
        </div>
      </div>
      </div>
      </a>

      <a href="penyewaan-sepeda-motor.php">
      <div class="col-md-4 col-sm-6 services text-center"><div class = "sewa-motor"> 
        <span style="color: #3cb9c1" class  = "fa fa-4x fa-motorcycle"></span>

        <div class="services-content">
          <h5>Penyewaan Sepeda Motor</h5>
          <p style="color: #3f3939;">Informasi penyewaan Sepeda motor di sekitar Tuk Tuk</p>
          <br>
        </div>
        </div>
        
        </a>


</style>

      </div>
      <a href="../rute.html">
      <div class="col-md-4 col-sm-6 services text-center"><div class = "rute-wisata"><span style="color: #3cb9c1" class  = "fa fa-4x fa-map-signs"></span>
</span>
        <div class="services-content">
          <h5>Rute Wisata</h5>
          <p style="color: #3f3939;">Informasi mengenai Rute Perjalanan Wisata di sekitar Tuk Tuk</p>
          <br>
        </div>
      </div>
      </div>
</a>
    </div>
  </div>
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