<?php
// Load file koneksi.php
include "dbcontroller.php";
include "penyewaan-sepeda.php";
// Ambil Data yang Dikirim dari Form

$nama = $_POST['nama'];
$no_HP = $_POST['no_HP'];
$no_KTP = $_POST['no_KTP'];
$Alamat=$_POST['Alamat'];

    foreach ($_SESSION["cart_item"] as $item){

$TEXT= "Pesanan Sepeda dengan Kode Unik : ".$item["code"].",Banyak Sepeda :".$item["quantity"]." Atas nama : ".$nama."Telah Dikonfirmasi"  ;

// Set path folder tempat menyimpan gambarnya
   

	



	$query = 
"INSERT INTO `tbl_hasil_penyewaan` (nama_penyewa,No_HP,No_KTP,Alamat,banyak_sepeda,Kode_unik,Text) VALUES('".$nama."','".$no_HP."','".$no_KTP."','".$Alamat."','".$item["quantity"]."','".$item["code"]."','".$TEXT."')";

			$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

			if($sql){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				
 echo "<script>$('#thankyouModal').modal('show')</script>";   




				header("location: detail_pemesanan.php"); // Redirectke halaman index.php
			}else{
				// Jika Gagal, Lakukan :
				echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
				echo "<br><a href='penyewaan-sepeda.php'>Kembali Ke Form</a>";
			}
	}

?>
