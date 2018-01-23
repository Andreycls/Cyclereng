<?php
//session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  case "add":
    if(!empty($_POST["quantity"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM tbl_sepeda WHERE code='" . $_GET["code"] . "'");
      $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
      
      if(!empty($_SESSION["cart_item"])) {
        if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              if($productByCode[0]["code"] == $k) {
                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                  $_SESSION["cart_item"][$k]["quantity"] = 0;
                }
                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
              }
          }
        } else {  
          $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
        }
      } else {
        $_SESSION["cart_item"] = $itemArray;
      }
    }
  break;
  case "remove":
    if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["code"] == $k)
            unset($_SESSION["cart_item"][$k]);        
          if(empty($_SESSION["cart_item"]))
            unset($_SESSION["cart_item"]);
      }
    }
  break;
  case "empty":
    unset($_SESSION["cart_item"]);
  break;  
}
}
?>

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

<script src="js/jquery_new.min.js"></script> 
<link rel="stylesheet" href="css/animate.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
</head>
<style>
.banner {
  background-position: center top;
  background-image: url(images/inpo.jpg);
  
  background-repeat: no-repeat;
  -moz-background-size:cover;
  -o-background-size: cover;
  -webkit-background-size: cover;
  background-size: 1400px;

  min-height: 250px;
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
          <style>

.dropbtn {
    background-color: #EEA236;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #A2D0FF;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 10px;

}

.dropdown-content a {
    color: black;
    padding: 11px 0px;
    text-decoration: none;
    display: inline-block;

}

.dropdown-content a:hover {
  background-color: #6D8DFF;


}

.dropdown:hover .dropdown-content {
    display: block;

}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
#product-grid {width: 1200px;}
</style>

  <div class="dropdown">
  <button class="dropbtn"><strong>Panduan</strong></button>
  <div class="dropdown-content">
    <a href="home.html#Cara menyewa">Cara Menyewa</a>
    <a href="home.html#Penyedia">APA ITU PENYEDIA?</a>
    <a href="home.html#Syarat">SYARAT DAN KETENTUAN</a>
    <a href="home.html#Daftar">BAGAIMANA CARA MENDAFTAR</a>
  </div>
</div>
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
<script>

$(document).ready(function(){
    $(".btnAddAction").click(function(){
       // $("#myModal").modal();

    });
});
</script>

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
  


<h2 align="center">Objek Wisata Sekitar Daerah Tuktuk, Samosir</h2>
  <div class="container">
    <div class="row">




<!-- WOOI -->

<tr>

</tbody>


<!-- Proses Popup-->
<div class="modal fade" id="Proses" role="dialog">
    <div class="modal-dialog">
    <?php 
$API_KEY = "38f9cdad" ;
$API_SECRET = "c6c587eb54e70f3c" ;
$FROM = "Cyclereng Developer";
$TEXT = "";
?>

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">Masukkan data pada Form isian </h4>
        </div>
        <div class="modal-body">
        <form action="https://rest.nexmo.com/sms/json?api_key=38f9cdad &api_secret=c6c587eb54e70f3c&from='Andrey'&text='' " method="POST">
        <p align="left">Nama Penyewa : &nbsp; &nbsp; &nbsp; <input type="text" name="nama"></p> 
        <p align="left">no HP :&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <input type="number" name="to"></p>
        <p align="left">no KTP :&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <input type="number" name="no_KTP"></p>
        <p align="left">Alamat : &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<input type="text" name="Alamat"></p>
        
        
        
        
        </div>
        <div class="modal-footer">
       <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
<p align="right"> <input type="submit" value="Sewa" class="btnSewaAction" >
        </form>
        </div>
      </div>
      
    </div>
  </div>
  
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
<p align="right"><input type="submit" value="Sewa" class="btnSewaAction" >
        </form>
        </div>
      </div>
      
    </div>
  </div>

<!-- bukti tambah -->



</table>    
  
</a>

</div>


<div id="product-grid">
  <div class="txt-heading"></div>
  <?php
  $product_array = $db_handle->runQuery("SELECT * FROM tbl_rute ORDER BY id ASC");
  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>
    <div class="product-item">

      <form method="post" >
      <div class="product-image">
      <a href="rute-detail.php?Wisata='<?php echo $product_array[$key]["Wisata"]; ?>'"><img src="<?php echo $product_array[$key]["gambar_kecil"]; ?>"></div>
      <br><br><br><br><br><br>
      <div><strong><p style="color: black"><?php echo $product_array[$key]["judul"]; ?></strong></div>
      <div></a></div>
      </form>
    </div>
  <?php
      }
  }
  ?>

</div>


<!-- IOOW-->







    

    
    <!--

      <div class="col-md-4 col-sm-6 services text-center"> <div class="kotak"><center>
      <img src="images/cy1.png" class="img-responsive" alt="Apple" height="100px" width="200px"></center>

        <div class="services-content">
          <h5>Sepeda Gunung</h5>
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
          <h5>Sepeda Gunung</h5>
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
          <h5>Sepeda Gunung</h5>
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
          <h5>Sepeda Gunung</h5>
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
         <h5>Sepeda Gunung</h5>
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
         <h5>Sepeda Gunung</h5>
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
            <li><a href="#">Penyewaan Sepeda</a></li>
            <li><a href="#">Penyewaan Sepeda Motor</a></li>
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
<link rel="stylesheet" href="css/tab.css">

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
