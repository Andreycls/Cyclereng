-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2018 at 02:43 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyclereng`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('andrey', 'andrey');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun_mitra`
--

CREATE TABLE `tbl_akun_mitra` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(5) NOT NULL,
  `role` varchar(20) NOT NULL,
  `nama_Penyedia` varchar(20) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akun_mitra`
--

INSERT INTO `tbl_akun_mitra` (`username`, `password`, `id`, `role`, `nama_Penyedia`, `last_login`) VALUES
('admin', 'admin', 0, 'Admin', 'Admin', '0000-00-00'),
('Relita', 'relita', 0, 'admin', 'Relita Manik', '0000-00-00'),
('Sophia', 'Sophia', 0, 'Admin', 'Sophia Sinaga', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil_penyewaan`
--

CREATE TABLE `tbl_hasil_penyewaan` (
  `nama_penyewa` varchar(30) NOT NULL,
  `No_HP` bigint(30) NOT NULL,
  `No_KTP` int(25) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `banyak_sepeda` int(3) NOT NULL,
  `Kode_unik` varchar(20) NOT NULL,
  `id` int(5) NOT NULL,
  `Konfirmasi` tinyint(1) NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hasil_penyewaan`
--

INSERT INTO `tbl_hasil_penyewaan` (`nama_penyewa`, `No_HP`, `No_KTP`, `Alamat`, `banyak_sepeda`, `Kode_unik`, `id`, `Konfirmasi`, `Text`) VALUES
('Novalin', 999, 889, '99', 1, 'RelitaFixie', 135, 0, 'Pesanan Sepeda dengan Kode Unik : RelitaFixie,Banyak Sepeda :1 Atas nama : NovalinTelah Dikonfirmasi'),
('Andrey CLS', 2147483647, 555, 'Medan', 1, 'RelitaGunung', 141, 0, 'Pesanan Sepeda dengan Kode Unik : RelitaGunung,Banyak Sepeda :1 Atas nama : Andrey CLSTelah Dikonfirmasi'),
('Santi', 6282368455879, 888, 'Jalan. Sosor Galung', 1, 'RelitaFixie', 142, 0, 'Pesanan Sepeda dengan Kode Unik : RelitaFixie,Banyak Sepeda :1 Atas nama : SantiTelah Dikonfirmasi'),
('Santi', 6282368455879, 123456, 'Jalan.Sosor Galung', 1, 'RelitaGunung', 143, 0, 'Pesanan Sepeda dengan Kode Unik : RelitaGunung,Banyak Sepeda :1 Atas nama : SantiTelah Dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil_penyewaan_motor`
--

CREATE TABLE `tbl_hasil_penyewaan_motor` (
  `nama_penyewa` varchar(30) NOT NULL,
  `no_HP` bigint(20) NOT NULL,
  `No_KTP` int(25) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `banyak_motor` int(3) NOT NULL,
  `Kode_unik` varchar(20) NOT NULL,
  `id` int(5) NOT NULL,
  `Konfirmasi` tinyint(1) NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hasil_penyewaan_motor`
--

INSERT INTO `tbl_hasil_penyewaan_motor` (`nama_penyewa`, `no_HP`, `No_KTP`, `Alamat`, `banyak_motor`, `Kode_unik`, `id`, `Konfirmasi`, `Text`) VALUES
('Andrey CLS', 0, 1, 'Medan Bro', 1, 'RelitaMio', 78, 0, 'Pesanan Sepeda dengan Kode Unik : RelitaMio,Banyak Sepeda :1 Atas nama : Andrey CLSTelah Dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesan`
--

CREATE TABLE `tbl_pemesan` (
  `Nama` varchar(50) NOT NULL,
  `no_KTP` int(40) NOT NULL,
  `no_HP` int(20) NOT NULL,
  `Alamat` text NOT NULL,
  `jumlah` int(3) NOT NULL,
  `id_sepeda` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyedia`
--

CREATE TABLE `tbl_penyedia` (
  `nama_penyedia` varchar(32) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `nomor_hp` bigint(13) NOT NULL,
  `id` int(10) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `foto_ktp` varchar(64) NOT NULL,
  `Kode_sepeda` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penyedia`
--

INSERT INTO `tbl_penyedia` (`nama_penyedia`, `alamat`, `nomor_hp`, `id`, `gambar`, `foto_ktp`, `Kode_sepeda`) VALUES
('Relita ', 'Jalan.Sosor Galung No.10,Tuktuk Siadong', 6282267459865, 0, '', '', ''),
('Sophia', 'Jalan.Sosor Galung No.4, Tuktuk Siadong', 6281370468599, 0, '', '', 'Sophia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyewaan`
--

CREATE TABLE `tbl_penyewaan` (
  `nama_penyewa` varchar(30) NOT NULL,
  `no_HP` int(20) NOT NULL,
  `No_KTP` int(25) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `banyak_sepeda` int(3) NOT NULL,
  `Kode_unik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rute`
--

CREATE TABLE `tbl_rute` (
  `id` int(3) NOT NULL,
  `Wisata` varchar(30) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar_kecil` varchar(100) NOT NULL,
  `gambar_besar` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `Lokasi` text NOT NULL,
  `rute` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rute`
--

INSERT INTO `tbl_rute` (`id`, `Wisata`, `judul`, `gambar_kecil`, `gambar_besar`, `deskripsi`, `Lokasi`, `rute`) VALUES
(0, 'Danau Sidihoni', 'Danau Sidihoni', 'images/SID1.jpg', 'images/SID2.jpg', '<br><br><br>Danau Sidihoni merupakan salah satu ciri khas dari pariwisata Danau Toba, Sumatera Utara. Selama ini, masyarakat awam hanya mengenal Parapat sebagai tempat paling oke untuk menikmati Toba, padahal Parapat ini hanya 40%nya Toba saja. Masyarakat juga sering mencukupkan diri untuk sekedar mengunjungi Tomok, Tuktuk Siadong, Makam Raja-Raja, Museum Batak, dan mencicipi BPK jika pergi ke Samosir. Padahal di Kecamatan Pangururan, yang berada di sisi barat Pulau Samosir.\r\n', 'Kecamatan Pangururan, Kabupaten Samosir, Sumatera Utara', 'Melalui jalur Tele jika dari arah Kabupaten Karo , jalur alternatif yaitu menyebrang dengan Feri'),
(1, 'Bukit Holbung', 'Bukit Holbung', 'images/holbung1.png', 'images/holbung2.jpg', '<br><br><br>Siapa yang tidak takjub dengan pesona Danau Toba. Kita bisa melihat keindahan Danau Toba dari berbagai sisi di 7 kabupaten, Sumatera Utara. Salah satunya kita dapat melihat keindahan Danau Toba dari Bukit Holbung yang berada di Desa Janji Marhatan, Kabupaten Samosir, Sumatera Utara. Banggalah buat kamu yang lahir dan besar di Sumatera Utara, karena masih banyak potensi wisata alam yang bisa kamu lihat disini.\r\nBukit Holbung, Keindahan Indonesia dari Sumatera Utara\r\n<br>\r\n<br>\r\nUdara yang dingin tidak menyurutkan untuk mengexplore sebuah bukit yang indah disekitar Danau Toba.\r\nHempasan angin dan udara yang segar membuat kita memejamkan mata menikmatinya. Pusuk buhit terlihat sangat megahnya diatas danau toba yang biru. Langit pun seperti lukisan abstrak yang sangat indah. Terdapat juga retakan bukit yang menguak dengan nilai seninya yang tinggi. Pokoknya kata-kata tidak dapat mewakilin keindahannya.\r\nBukit Holbung, Keindahan Indonesia dari Sumatera Utara\r\n<br>\r\n\r\n<br>\r\nBeberapa  banyak yang tiduran tersenyum puas sambil menikmati panorama Pusuk Buhit, Danau Toba dan bukit teletubbiesnya. Oh ya, bagi kalian yang hobby ngecamp, wajib nginap disini karena permukaan bukitnya datar tidak bergelombang.\r\nBukit Holbung, Keindahan Indonesia dari Sumatera Utara\r\n<br>\r\n\r\n<br>\r\nBukit Holbung menjadi salah satu keindahan yang ada di Indonesia, khususnya Sumatera Utara. Siapapun silahkan datang kesini dan menikmati keindahan alam yang tersedia disini. Namun tetaplah harus ingat untuk menjaga dan melesatarikannya.', 'Desa Janji Marhatan, Kabupaten Samosir, Sumatera Utara', 'Untuk menuju bukit ini dapat ditempuh dengan dua rute.\r\nPertama melalui Medan - Kabanjahe - Tele. \r\nKedua Melalui Medan - Siantar - Parapat - Tomok (Samosir)\r\nBukit Holbung,'),
(3, 'Museum Batak ', 'Museum Batak', 'images/Batak-Museum-1.png', 'images/Batak-Museum-2.jpg', 'Museum yang didirikan pada tahun 2005 ini dibangun menyerupai rumah adat Batak dan berbentuk segi empat. Begitu memasuki halaman museum, Anda akan mendapati patung-patung dan meja batu berukuran kecil terletak di sudut halaman. Benda-benda ini merupakan benda peninggalan dari zaman megalitikum.\r\n<br>\r\n<br>\r\n\r\nBila Anda melihat dengan saksama, bangunan Museum Batak ini memiliki ornamen-ornamen unik dan etnik yang cantik. Dinding bangunan didominasi tiga warna yang dianggap suci oleh orang Batak, yaitu warna merah, hitam, dan putih. Satu hal yang cukup menarik perhatian adalah salah satu sisi dinding yang berukirkan empat buah payudara dan cicak. Ukiran cicak ini memiliki filosofi tersendiri, di mana orang Batak harus bisa hidup seperti cicak yang mampu menyesuaikan diri dan menempel di mana pun berada. Sedangkan empat payudara melambangkan bahwa orang Batak harus memiliki banyak anak. Sementara itu, maksud dari simbol cicak yang berdekatan dengan empat payudara tersebut melambangkan bahwa ke mana pun seseorang pergi, dia harus ingat kepada ibu yang telah melahirkannya serta tidak lupa pada tanah kelahirannya\r\n<br>\r\n<br>\r\n\r\nMuseum batak memiliki berbagai macam koleksi yang berkaitan dengan tanah Batak. Di tempat ini terdapat berbagai jenis kain ulos dengan fungsi pemakaian yang berbeda serta pakaian adat Batak, patung-patung yang terbuat dari kayu, pedang, berbagai macam peralatan pertanian, peralatan rumah tangga yang merupakan koleksi peninggalan Batak kuno, naskah kuno, gondang Batak, dan koleksi lainnya. Walaupun koleksinya tidak terlalu banyak dan bangunannya juga tidak terlalu besar, namun berada di museum ini dapat memberikan pengalaman dan pengetahuan baru mengenai adat-istiadat dan kebudayaan Batak.\r\n<br>\r\n<br>\r\n\r\nMuseum ini sudah buka dari pagi hari. Tidak ada biaya tiket masuk untuk mengunjungi museum ini. Hanya saja, bila pengunjung bersedia, terdapat kotak sumbangan yang bisa diisi seikhlasnya.', 'Museum Batak ini terletak di Desa Tomok. Secara administratif, desa ini termasuk ke dalam kecamatan Simanindo, Kabupaten Samosir. Lokasi Museum Batak ini berada di paling ujung Desa Tomok. \r\n<br>Objek wisata yang satu ini termasuk salah satu destinasi yang wajib dikunjungi ketika Anda menyempatkan diri mengunjungi Tomok.\r\n', 'Tomok, Simanindo, Kabupaten Samosir, Sumatera Utara'),
(4, 'Pantai Pasir Putih Parbaba', 'Pantai Pasir Putih Parbaba', 'images/parbaba1.png', 'images/parbaba2.jpg', '<br>\r\nKetika datang  berlibur ke pantai, sebagian besar wisatawan memilih negara tropis seperti Indonesia. Di Sumatera Utara, Anda bisa menemukan Pantai Parbaba. Terletak di Desa Hutabolon, Panguruan.\r\n<br>\r\nPantai ini memiliki air yang tenang dan pasir putih yang lembut. Satu hal, Pantai Parbaba bukan pantai di tepi laut. Sebaliknya, itu adalah bagian dari Danau Toba. Bagaimana dengan keindahannya? Yah, itu sama menakjubkannya dengan laut. \r\n\r\n<br>\r\nIni adalah pantai di danau dan telah menarik banyak pengunjung dari waktu ke waktu. Sebagian besar pengunjung berasal dari Medan, Pematang Siantar, dan kota-kota sekitarnya.\r\n\r\n<br>\r\nAkomodasi terbaik terletak di Tuktuk Siadong. Dari sana, Anda bisa sampai di pantai dengan kendaraan umum. Apa yang membuat Pantai Parbaba terkenal? Seperti disebutkan sebelumnya, pantai ini menampilkan pasir putih yang menakjubkan. Selain itu, itu juga menawarkan suasana yang menyegarkan. Ombaknya tidak kuat, dan anginnya menenangkan. Wisatawan bisa duduk dan bersantai disekitarnya sambil menyaksikan keindahan pemandangan Danau Toba. Pantai ini terletak di daerah pegunungan. Ini adalah tempat yang sempurna untuk bersantai dan piknik.\r\n\r\n<br>\r\nAktivitas\r\n\r\n<br>\r\nPantai Parbaba juga memiliki banyak pohon besar. Itu berarti wisatawan bisa bersantai di bawah pohon rindang ini. Sedangkan untuk latar belakangnya, ada Gunung Pusuk Buhit yang terkenal. Ini bisa menjadi objek fotografi yang mengagumkan. Pantai ini juga cocok untuk mereka yang suka menggambar di pasir. Singkatnya, pantai ini terkenal dengan ketenangan dan keindahan alamnya. Banyak pengunjung ingin bermain di dekat air yang juga menyukai pasir lembut dan putih. Beberapa dari mereka juga ingin berbaring di pantai.\r\n\r\n<br>\r\nVoli pantai juga menjadi  olahraga yang paling menarik untuk dilakukan di Pantai Parbaba. Karena pemerintah daerah setempat memperhatikan pantai dengan baik, banyak kompetisi diadakan di sini. Wisatawan juga berkesempatan menyaksikan beberapa pertandingan voli. Bahkan, mereka bisa bergabung dengan mereka. Bagi yang tidak suka olahraga, mereka bisa menikmati pemandangan yang menakjubkan di dekatnya. Hal ini karena pantai dilengkapi dengan beberapa fasilitas seperti cottage dan toilet lokal.\r\n\r\n<br>\r\nKarena air danaunya tenang,  Pantai ini menjadi favorit untuk melakukan banyak olahraga air seperti berenang, naik banana boat, odong-odong danau, sepeda air, ban atau pelampung berbagai macam bentuk, dll.\r\n\r\n<br>\r\nPantai Parbaba terletak di dekat berbagai fasilitas. Sangat mudah untuk menemukan restoran dan restoran lokal. Makanan lokal terbaik adalah ayam Napiandar. Biasanya, penduduk setempat hanya memasaknya selama acara khusus di desa mereka. Makanan ini dimasak dengan mencampur darah ayam dan lada Batak atau yang lebih dikenal andaliman. Beberapa orang mungkin akan merasa ngeri makan makanan ini, tetapi banyak juga yang menyukainya karena rasanya yang lezat dan pedas.\r\n', 'Desa Hutabolon, Panguruan', 'Dari Medan atau Jakarta Anda dapat naik pesawat langsung menuju Bandara Silangit di Siborong-borong, Kabupaten Tapanuli Utara. Dari Bandara dilanjutkan naik taxi menuju Pantai Parbaba, Desa Hutabolon di Pulau Samosir\r\n<br>\r\nApbila menggunakan transportasi darat, dari Medan, Anda harus langsung menuju ke Samosir. Begitu sampai di Samosir, Anda bisa menggunakan ojek atau becak motor.\r\n<br>\r\n Pantai Parbaba mudah ditemukan. Bahkan ada penunjuk jalan. Jika berasal dari Desa Tomok, dibutuhkan waktu sekitar 1 jam. Tujuannya adalah Desa Hutabolon. Perjalanan akan cukup nyaman. Jalan telah diaspal dan wisatawan dapat menikmati pemandangan yang indah sepanjang jalan menuju pantai Danau Toba yang menakjubkan.'),
(6, 'Air terjun Efrata', 'Air terjun Efrata', 'images/Efrata1.jpg', 'images/Efrata2.jpg', 'Pulau Samosir sangat terkenal dengan wisata Danau Toba, selain keindahan danau terbesar di Asia ini ada juga wisata air terjun Efrata yang tidak boleh dilewatkan khususnya bagi anda pecinta wisata alam.\r\nUntuk menuju  hanya memerlukan waktu 15 menit dari Menara Tele, tempat melihat keindahan danau dari atas menara. Sayang sekali jika tidak singgah sejenak untuk mandi air dingin yang turun langsung dari bukit tertinggi di sana.\r\n\r\nAir Terjun Efrata merupakan salah satu objek wisata yang ada di Samosir. Air terjun Ini memiliki daya tarik karena keberadaannya yang tidak jauh dari pasar. Hanya cukup turun tangga 10 menit, wisatawan sudah bisa melihat keindahan air terjunnya yang deras dan memiliki tebing yang indah seperti dipahat.\r\nAir Terjun Efrata berada di Desa Sosor Dolok, Kecamatan Harian. Berjarak 20 km lebih dari pusat kota Kabupaten Samosir. Tidak terlalu banyak wisatawan kemari, meskipun pada musim liburan, mungkin karena jaraknya cukup jauh dari objek wisata yang familiar dan cukup terkenal di Samosir yakni Danau Toba.\r\n                                                                             \r\nWisatawan biasanya paling favorit ke Tomok dan Tuktuk jika ke Samosir selain menyambangi Danau Toba. Namun bagi petualang khususnya anak penjelajah maupun pecinta alam, pasti tidak akan melewatkan Air Terjun Efrata Ini saat ke Samosir.\r\nUntuk jalanan menuju Sampuran Efrata tidak terlalu mulus, banyak jalan berbelok dan berbatu yang membuat wisatawan harus cukup berhati-hati dalam mengendarai kendaraan.\r\n"Syukurnya, air terjun berada sekitar pemukiman warga. Banyak rumah-rumah papan petunjuk arah keberadaan Air Terjun Efrata. Tidak perlu tracking terlalu lelah, air terjunnya sudah terlihat," katanya.\r\n<br>\r\nAir Terjun Efrata sebenarnya cukup bagus tapi belakangan cukup tidak terawat karena banyak dahan pohon di sekitarnya yang tidak dibersihkan.\r\n<br>\r\n"Sayang area kolamnya tidak terlalu bersih, banyak dahan dan ranting mungkin jatuh dari air terjun atau jatuh dari pohon sekitar," jelasnya.\r\nUntuk mencapainya anda juga bisa mengendarai sepeda motor dan mobil. Di sana juga anda menemui masyarakat yang ramah dan hamparan sawah hijau dari daerah Harian Boho akan menyambut anda ketika menuju air terjun yang indah tersebut.\r\n<br>\r\nAir terjun Efrata memiliki ketinggian sekitar 100 meter yang mengalir dari kawasan hutan Tele menuju Danau Toba.\r\nSaat ini pengunjung tidak perlu mengeluarkan uang banyak untuk berkunjung ke tempat tersebut, cukup membayar uang parkir Rp 2.000 dan uang parkir Rp5000 untuk sepeda motor parkir di rumah penduduk, pengunjung dapat menikmati keindahan alam air terjun Efrata tersebut.\r\n', 'Desa Sosor Dolok, Kecamatan Harian', 'Desa Sosor Dolok, Kecamatan Harian. Berjarak 20 km lebih dari pusat kota Kabupaten Samosir. Tidak terlalu banyak wisatawan kemari, meskipun pada musim liburan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sepeda`
--

CREATE TABLE `tbl_sepeda` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `nama_penyedia` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `Kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sepeda`
--

INSERT INTO `tbl_sepeda` (`id`, `name`, `code`, `image`, `price`, `nama_penyedia`, `deskripsi`, `Kategori`) VALUES
(10, 'Sepeda Gunung Yumeida', 'RelitaGunung', 'images/cy1.png', '40.000', 'Relita Manik', 'Dilengkapi gembok ban ', 'Sepeda Gunung'),
(11, 'Sepeda Fixie', 'RelitaFixie', 'images/cy2.png', '50.000', 'Relita Manik', 'Dilengkapi gembok, warna sudah pudar', 'Sepeda Free Ride'),
(19, 'Sepeda Gunung Yumeida', 'RelitaGsunung', 'images/cy4.png', '40.000', 'Relita Manik', 'Dilengkapi gembok ban ', 'Sepeda Gunung'),
(89, 'Sepeda Gunung Colosus', 'RelitaColosus', 'images/Colosus.png', '40.000', 'Relita Manik', 'Dilengkapi gembok ban ', 'Sepeda Gunung'),
(99, 'Sepeda Gunung ColosusX', 'RelitaColosusX', 'images/cy3.png', '40.000', 'Relita Manik', 'Dilengkapi gembok ban ', 'Sepeda Gunung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sepeda_motor`
--

CREATE TABLE `tbl_sepeda_motor` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `nama_penyedia` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `Kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sepeda_motor`
--

INSERT INTO `tbl_sepeda_motor` (`id`, `name`, `code`, `image`, `price`, `nama_penyedia`, `deskripsi`, `Kategori`) VALUES
(12, 'Yamaha Jupiter Z', 'RelitaJupiterZ', 'images/motmot.png', '85.000', 'Relita Manik', 'Baru dimasukkan 2 hari yang lalu', 'Motor Bebek'),
(16, 'Yamaha Jupiter', 'RelitaJupiter', 'images/jupiter.jpg', '85.000', 'Relita Manik', 'Baru dimasukkan 2 hari yang lalu', 'Motor Bebek'),
(17, 'Mio Sporty', 'RelitaMio', 'images/MioSporty.png', '85.000', 'Relita Manik', 'Baru dimasukkan 2 hari yang lalu', 'Motor Matic'),
(18, 'Honda Supra X 125', 'RelitaSuprax', 'images/SupraX.png', '85.000', 'Relita Manik', 'Baru dimasukkan 2 hari yang lalu', 'Motor Bebek'),
(19, 'Honda Beat', 'RelitaBeat', 'images/Beat.jpg', '85.000', 'Relita Manik', 'Baru dimasukkan 2 hari yang lalu', 'Motor Matic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_akun_mitra`
--
ALTER TABLE `tbl_akun_mitra`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- Indexes for table `tbl_hasil_penyewaan`
--
ALTER TABLE `tbl_hasil_penyewaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hasil_penyewaan_motor`
--
ALTER TABLE `tbl_hasil_penyewaan_motor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  ADD PRIMARY KEY (`no_KTP`);

--
-- Indexes for table `tbl_penyedia`
--
ALTER TABLE `tbl_penyedia`
  ADD PRIMARY KEY (`nama_penyedia`);

--
-- Indexes for table `tbl_penyewaan`
--
ALTER TABLE `tbl_penyewaan`
  ADD UNIQUE KEY `Kode_unik` (`Kode_unik`),
  ADD KEY `Kode_unik_2` (`Kode_unik`);

--
-- Indexes for table `tbl_rute`
--
ALTER TABLE `tbl_rute`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `judul` (`judul`);

--
-- Indexes for table `tbl_sepeda`
--
ALTER TABLE `tbl_sepeda`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`),
  ADD KEY `nama_penyedia` (`nama_penyedia`);

--
-- Indexes for table `tbl_sepeda_motor`
--
ALTER TABLE `tbl_sepeda_motor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`),
  ADD KEY `nama_penyedia` (`nama_penyedia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_hasil_penyewaan`
--
ALTER TABLE `tbl_hasil_penyewaan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `tbl_hasil_penyewaan_motor`
--
ALTER TABLE `tbl_hasil_penyewaan_motor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `tbl_rute`
--
ALTER TABLE `tbl_rute`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_sepeda`
--
ALTER TABLE `tbl_sepeda`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `tbl_sepeda_motor`
--
ALTER TABLE `tbl_sepeda_motor`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_penyewaan`
--
ALTER TABLE `tbl_penyewaan`
  ADD CONSTRAINT `tbl_penyewaan_ibfk_1` FOREIGN KEY (`Kode_unik`) REFERENCES `tbl_sepeda` (`code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
