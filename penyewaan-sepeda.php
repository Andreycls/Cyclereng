<?php
session_start();
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
<script>

$(document).ready(function(){
    $(".btnAddAction").click(function(){
       // $("#myModal").modal();

    });
});
</script>

<!-- trigger button -->

    <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 align="center" class="modal-title" id="myModalLabel">Terimakasih karena telah menggunakan jasa kami</h4>
            </div>
            <div class="modal-body">
                <p align="center">Penyedia akan menginformasikan lebih lanjut melalui SMS ke nomor yang telah Anda kirim.

                </p>
                <p align="center">
                <a href="detail_pemesanan.php" class="btn btn-primary">Lihat detail pemesanan</p></a>        
                <p align="center">Jika Penyedia belum mengkonfirmasi pesanan, maka dapat mengirim SMS ke Penyedia melalui tombol "Kirim SMS ke Penyedia" </p>          
                 <form action="proses_sewa.php" method="POST">
                 <p align="center">
                 <input type="submit" name="kirim" value="Kirim SMS ke Penyedia" class="btn btn info">   </p>
            </div>    
        </div>
    </div>
</div>



<!--haii-->

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
  



<h2 align="center">Penyewaan Sepeda Daerah Tuktuk, Samosir</h2>


  <div class="container">
    <div class="row">


<div id="shopping-cart">
<div class="txt-heading">Keranjang Belanja <a id="btnEmpty" href="penyewaan-sepeda.php?action=empty#services">Kosongkan Keranjang</a></div>


<!-- WOOI -->
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>  

<table align="center" cellpadding="90" cellspacing="10" width="1100px">
<tbody>
<tr>
<th style="text-align:left;"><strong>Nama Sepeda</p><p></strong></th>
<th style="text-align:left;"><strong>Kode Unik  <p></strong></th>
<th style="text-align:right;"><strong>Banyak<p></strong></th>
<th style="text-align:right;"><strong>Harga<p></strong></th>
<th style="text-align:center;"><strong>Aksi<p></strong></th>

</tr>

<?php   
    foreach ($_SESSION["cart_item"] as $item){
    ?>
        <tr>
        <br>
        <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><p><?php echo $item["name"]; ?></p></td>
        <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><p><?php echo $item["code"]; ?></p></td>
        <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><p><?php echo $item["quantity"]; ?></p></td>
        <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><p><?php echo "Rp ".$item["price"]; ?></p></td>
        <td style="text-align:center;border-bottom:#F0F0F0 1px solid;">

        <a href="penyewaan-sepeda.php?action=remove&code=<?php echo $item["code"];?>#services" class="btnRemoveAction">Hapus </a></td>
        </tr>
        <?php
        $item_total += ($item["price"]*$item["quantity"]);
    }
    ?>

<tr>

<td colspan="5" align=right><strong><br>Total:</strong> <?php echo "Rp ".$item_total.".000"; ?></td>
    <tr>
    <td>&nbsp;</td>
    <td colspan="5" align="right"><br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Proses">Proses</button></td>
    <td><br></td>
    </tr>

</tr>

</tbody>


<!-- Proses Popup-->
<div class="modal fade" id="Proses" role="dialog">
    <div class="modal-dialog">
    <?php 
$API_KEY = "38f9cdad" ;
$API_SECRET = "c6c587eb54e70f3c" ;
$FROM = "Cyclereng Developer";
$Action = "https://rest.nexmo.com/sms/json?api_key=38f9cdad &api_secret=c6c587eb54e70f3c&from='Andrey'&text='' "
?>

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">Masukkan data pada Form isian </h4>
        </div>
        <div class="modal-body">


        <form action="proses_sewa.php" method="POST">
        <p align="left">Nama Penyewa : &nbsp; &nbsp; &nbsp; <input required type="text" name="nama"></p> 
        <p align="left">Nomor HandPhone :&nbsp;  <input type="number" required name="no_HP"></p>
        <p align="left">Nomor KTP :&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <input type="number" name="no_KTP" required></p>
        <p align="left">Alamat : &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<textarea  type="field" name="Alamat"   required ></textarea></p>
<br>
        <p><strong>Syarat dan Ketentuan</strong></p>
         
         <ol>  
<li>Penyewa bersedia untuk meninggalkan KTP dan/atau STNK kepada penyedia sebagai jaminan ketika penyewa hendak melakukan penyewaan kendaraan. Penyewa bersedia untuk menjaga KTP atau STNK penyewa. Apabila KTP dan/atau STNK penyewa hilang pada pihak penyedia, maka hal tersebut merupakan tanggung jawab Penyewa.
</li>
           <li>
Kendaraan yang sedang disewakan oleh penyewa merupakan tanggung jawab penyewa. Apabila terjadi kecelakaan yang mengakibatkan kerusakan pada kendaraan yang disewa, maka kerusakan tersebut ditanggung oleh penyewa.
</li>
<li>
Penyewa berhak untuk memeriksa kondisi dan barang/atribut yang ada pada kendaraan. Apabila barang/atribut kendaraan hilang dan/atau kurang pada kendaraan yang hendak disewa, maka penyewa harus melaporkan kepada penyedia.
Apabila barang/atribut kendaraan yang disewa hilang ketika penyewa sedang menyewakaan kendaraannya, maka hal tersebut merupakan tanggung jawab dari penyewa.
</li>
        
        
        
        
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
  <?php
}
?>
<br>
<div id="category-grid">
  <div class="txt-heading">Kategori</div>

<a href='Kategori-sepeda.php?Kategori="Sepeda Gunung"'>
  <div id="category-item">

      <form method="post" >
  <div class="category-image"><img src="images/cy1.png"></div>
    <?php 
    $Kategori = "Sepeda Gunung";
    ?>
            <br><br><br><br>
      <div><p style="color: #3e4444"><strong>Sepeda Gunung</strong></div>
      
      </form>




</div>
</a>

<a href='Kategori-sepeda.php?Kategori="Sepeda Hybrid"'>
<div id="category-item">


      <form method="post" action="penyewaan-sepeda.php ?>#services">
  <div class="category-image"><img src="images/cy1.png"></div>

            <br><br><br><br>
      <div><p><strong>Sepeda Hybrid</strong></div>
      
      </form>




</div>
</a>
<a href='Kategori-sepeda.php?Kategori="Sepeda Keranjang"'>
<div id="category-item">


      <form method="post" action="penyewaan-sepeda.php ?>#services">


  <div class="category-image"><img src="images/cy1.png"></div>

            <br><br><br><br>
      <div><p><strong>Sepeda Keranjang</strong></div>
      
      </form>




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
<div id="product-grid">
  <div class="txt-heading">Produk terbaru</div>
  <?php
  $product_array = $db_handle->runQuery("SELECT * FROM tbl_sepeda ORDER BY id ASC");
  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>
    <div class="product-item">

      <form method="post" action="penyewaan-sepeda.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>#services">
      <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
      <br><br><br>
      <div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
      <div><strong>Penyedia : <?php echo $product_array[$key]["nama_penyedia"]; ?></strong></div>
      <div><strong>Deskripsi: <?php echo $product_array[$key]["deskripsi"]; ?></strong></div>
      <div class="product-price"><?php echo "Rp ".$product_array[$key]["price"]; ?></div>
      <div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Tambah" class="btnAddAction"  /></div>
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
