-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 08:50 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `keranjang_user`
--

CREATE TABLE `keranjang_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `nama_obat` varchar(128) NOT NULL,
  `jumlah` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang_user`
--

INSERT INTO `keranjang_user` (`id`, `user_id`, `nama_user`, `nama_obat`, `jumlah`) VALUES
(10, 12, 'Adi Rizaldi', 'Panadol Extra', '5'),
(11, 12, 'Adi Rizaldi', 'Vaksin Covid-19', '1'),
(12, 12, 'Adi Rizaldi', 'Zetia', '10'),
(13, 13, 'Fauzi Maulana Nugraha', 'Ambien', '5'),
(14, 13, 'Fauzi Maulana Nugraha', 'Panadol Extra', '5'),
(15, 12, 'Adi Rizaldi', 'Minyak Tawon', '5');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(128) NOT NULL,
  `stok` int(128) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `stok`, `deskripsi`) VALUES
(1, 'Paramex', 100, 'PARAMEX merupakan obat dengan kandungan Paracetamol, Propyphenazone, Caffeine, Dexchlorpheniramine maleate. Obat ini dapat digunakan untuk meringankan sakit kepala dan sakit gigi.'),
(2, 'Minyak Tawon', 100, ''),
(4, 'Tetracyclines', 70, 'Tetracycline adalah antibiotik yang digunakan untuk mengobati infeksi bakteri. Obat ini akan mengganggu metabolisme bakteri, sehingga bakteri mati.'),
(5, 'Vaksin Covid-19', 60, ''),
(8, 'Ambien', 80, ''),
(11, 'Zetia  ', 50, 'Zetia (ezetimibe) digunakan untuk mengobati kolesterol darah tinggi bersama dengan diet, rendah lemakrendah kolesterol.'),
(12, 'Visine', 150, 'Visine adalah obat yang digunakan untuk merawat, mencegah dan memperbaiki iritasi pada mata. Obat ini merupakan obat bebas terbatas yang mengandung zat aktif tetrahydrozoline, dan benzalkonium chloride.'),
(13, 'Amoxillin', 120, 'Amoxillin adalah salah satu merek obat yang digunakan untuk mengatasi infeksi bakteri. Jenis infeksi yang bisa diobati dengan obat ini antara lain infeksi saluran kemih atau infeksi saluran pernapasan.  Amoxillin merupakan antibiotik dalam bentuk kapsul, d'),
(14, 'Betadine', 80, 'Betadine bermanfaat untuk mencegah pertumbuhan dan membunuh kuman penyebab infeksi pada kulit, seperti infeksi akibat luka gores atau luka bakar ringan. Obat antiseptik ini tersedia dalam bentuk cairan, salep, semprot, dan stik.  Betadine mengandung povido'),
(15, 'Antibiotik', 200, 'Antibiotik adalah kelompok obat yang digunakan untuk mengatasi dan mencegah infeksi bakteri. Obat ini bekerja dengan cara membunuh dan menghentikan bakteri berkembang biak di dalam tubuh. Antibiotik tidak dapat digunakan untuk mengatasi infeksi akibat viru'),
(16, 'Antangin', 60, 'Antangin bermanfaat untuk mengatasi masuk angin, mual, perut kembung, badan meriang, serta lelah. Antangin tersedia dalam beberapa bentuk sediaan, yaitu Antangin tablet, Antangin cair, dan Antangin anak.  Ada beberapa bahan utama yang terkandung dalam Anta'),
(17, 'Aspirin', 90, 'Acetosal atau aspirin adalah obat pengencer darah atau obat yang digunakan untuk mencegah penggumpalan darah. Sebagai pengencer darah, aspirin digunakan pada penderita penyakit jantung koroner, serangan jantung, penyakit arteri perifer, atau stroke.  Selai'),
(18, 'Asam Salisilat', 108, 'Asam salisilat adalah obat yang digunakan untuk mengatasi masalah kulit yang disebabkan oleh penebalan dan pengerasan kulit, seperti mata ikan dan kutil di kulit tangan dan kaki. Asam salisilat juga bisa digunakan untuk membantu mengatasi dan mencegah munc'),
(19, 'Gliserol', 80, 'Gliserol atau gliserin adalah obat yang digunakan untuk mengatasi konstipasi atau kesulitan buang air besar secara sementara. Obat ini diberikan melalui anus dan bekerja dengan menarik air ke dalam usus besar, sehingga menimbulkan rangsangan buang air besa'),
(20, 'Fluconazole', 75, 'Fluconazole adalah obat yang digunakan untuk mengobati candidiasis. Bagian tubuh yang bisa terinfeksi oleh jamur ini meliputi vagina, mulut, tenggorokan, kerongkongan, rongga perut, paru, saluran kemih, dan aliran darah.  Fluconazole juga bermanfaat untuk '),
(21, 'Enervon C', 50, 'Enervon C bermanfaat untuk membantu menjaga daya tahan tubuh. Suplemen multivitamin ini mengandung vitamin C, niasinamida, kalsium pantotenat, vitamin B1, vitamin B2, vitamin B6, dan vitamin B12.  Selain menjaga daya tahan tubuh, Enervon C juga dapat digun'),
(22, 'Entrostop', 50, 'Entrostop adalah merek obat untuk mengatasi diare. Terdapat dua jenis produk Entrostop yang dijual secara bebas di pasaran, yaitu Entrostop dan Entrostop Anak.  Entrostop mengandung 650 mg attapulgite dan 50 mg pectin yang berfungsi untuk menyerap racun da'),
(23, 'Dermatix', 50, 'Dermatix adalah obat luar untuk membantu menghaluskan bekas luka. Dermatix mengandung gel silikon dan vitamin C.  Hanya ada 1 varian Dermatix yang dijual di Indonesia, yaitu Dermatix Ultra dengan ukuran 7 ml dan 15 ml. Dermatix merupakan obat bebas yang da'),
(24, 'Daktarin', 60, 'Daktarin bermanfaat untuk mengatasi penyakit kulit akibat infeksi jamur, seperti panu, kutu air, kurap, dan candidiasis di mulut. Obat ini tersedia dalam bentuk bedak, salep, krim, dan oral gel.   Daktarin mengandung bahan aktif miconazole 2%. Obat ini bek'),
(25, 'Callusol', 80, 'Callusol bermanfaat untuk menghilangkan mata ikan, kapalan, atau kutil yang muncul di kulit. Callusol dikemas dalam bentuk cairan obat luar yang dijual secara bebas.  Cairan Callusol digunakan dengan cara dioleskan langsung ke daerah yang mengalami mata ik'),
(26, 'Cerebrovit', 60, 'Cerebrovit bermanfaat untuk meningkatkan konsentrasi dan fungsi otak, serta  memenuhi kebutuhan vitamin dan mineral. Cerebrovit merupakan obat bebas yang tersedia dalam bentuk kapsul.  Cerebrovit mengandung bahan aktif utama berupa asam L-glutamat yang ber'),
(27, 'Botox', 50, 'Botulinum toxin atau botox adalah obat yang digunakan untuk menghilangkan kerutan di wajah. Botox diberikan melalui suntikan dan efeknya hanya bertahan selama 3-6 bulan. Oleh karena itu, suntikan perlu diulang agar kerutan di wajah tetap tidak tampak.  Oba'),
(28, 'Holisticare Ester C', 60, 'Holisticare Ester C bermanfaat untuk memelihara daya tahan tubuh, serta mencegah dan mengatasi kekurangan vitamin C. Suplemen ini tersedia dalam bentuk tablet dan diperuntukkan bagi dewasa dan anak-anak.  Vitamin C memiliki banyak fungsi penting bagi tubuh'),
(29, 'Heparin', 55, 'Heparin adalah obat yang digunakan untuk mengobati dan mencegah penggumpalan darah. Obat ini bekerja dengan cara menghambat kerja faktor pembekuan, yaitu protein dalam tubuh yang berperan dalam proses pembekuan darah. Oleh karena itu, heparin dikenal sebag'),
(30, 'Insulin Suntik', 77, 'Insulin suntik adalah jenis obat yang digunakan untuk memenuhi kebutuhan pasokan insulin yang dibutuhkan oleh penderita diabetes. Insulin merupakan hormon yang bertugas membantu mengolah gula yang telah diserap tubuh agar menjadi energi. Insulin juga berpe'),
(31, 'Kalpanax', 54, 'Kalpanax bermanfaat untuk mengatasi infeksi kulit akibat jamur, seperti kutu air dan panu. Kalpanax tersedia dalam beberapa bentuk sediaan, yaitu Kalpanax krim, Kalpanax salep, dan Kalpanax cair.  Kalpanax merupakan obat bebas yang bisa Anda dapatkan di ap'),
(32, 'L-Alanyl-L-Glutamine', 34, 'L-alanyl-L-glutamine atau alanylglutamine adalah suplemen gizi yang mengandung asam amino l-alanyl dan l-glutamine yang digunakan sebagai nutrisi tambahan saat seseorang membutuhkan tambahan glutamine, misalnya saat terjadi hiperkatabolisme, yaitu ketika t'),
(33, 'Metil Salisilat', 22, 'Metil salisilat adalah obat antiinflamasi nonsteroid (OAINS) yang bermanfaat untuk meredakan rasa nyeri otot dan nyeri sendi akibat otot tegang, keseleo, atau peradangan. Namun sebagai sediaan topikal, metil salisilat tidak bekerja seperti obat OAINS yang '),
(34, 'Mixagrip', 16, 'Mixagrip bermanfaat untuk meredakan gejala flu dan batuk pada orang dewasa dan anak-anak. Mixagrip tersedia dalam varian Mixagrip Flu dan Mixagrip Flu & Batuk.  Dalam setiap tablet, Mixagrip Flu mengandung bahan aktif 500 mg paracetamol, 10 mg phenylephrin'),
(35, 'NUVO Hand Sanitizer dan Hand Soap', 425, 'NUVO Hand Sanitizer dan Hand Soap merupakan produk pembersih tangan tersedia dalam bentuk sabun cair dan gel. Produk ini bermanfaat untuk membasmi kuman, termasuk bakteri dan virus, pada area tangan.  NUVO mengandung bahan aktif ethanol efektif untuk mengh'),
(36, 'Obat Pencahar', 99, 'Obat pencahar adalah golongan obat-obatan yang digunakan untuk mengatasi sembelit atau konstipasi. Obat ini juga digunakan sebelum tindakan medis, seperti operasi usus atau kolonoskopi, untuk membersihkan kotoran atau tinja di dalam usus.  Sembelit atau ko'),
(37, 'Oralit', 77, 'Oralit bermanfaat untuk meredakan dehidrasi, terutama yang disebabkan oleh diare. Oralit aman untuk dikonsumsi oleh siapa saja, baik oleh bayi, anak-anak, maupun orang dewasa.  Diare dapat menyebabkan penderitanya mengalami dehidrasi. Beberapa tanda yang b'),
(38, 'Paracetamol (Acetaminophen)', 146, 'Acetaminophen atau paracetamol adalah obat untuk penurun demam dan pereda nyeri, seperti nyeri haid dan sakit gigi. Paracetamol tersedia dalam bentuk tablet 500 mg dan 600 mg, sirup, drop, suppositoria, dan infus.  Paracetamol bekerja dengan cara mengurang'),
(39, 'Quinidine', 44, 'Quinidine adalah obat golongan antiaritmia yang digunakan untuk mengobati berbagai jenis aritmia, seperti fibrilasi atrium dan atrial flutter. Obat ini bekerja dengan cara memblokir aliran sinyal denyut jantung yang tidak beraturan dan meningkatkan kemampu'),
(40, 'Redoxon', 58, 'Redoxon adalah produk suplemen dengan kandungan kombinasi vitamin dan mineral yang secara normal dapat ditemukan dalam makanan. Suplemen vitamin dan mineral diperlukan mencegah kekurangan kedua zat tersebut, terutama pada kondisi di mana asupan dari makana'),
(41, 'Risperidone', 87, 'Risperidone adalah obat yang digunakan untuk menangani gangguan mental dengan gejala psikosis, seperti skizofrenia atau gangguan bipolar. Selain itu, obat antipsikotik ini juga digunakan untuk menangani penyakit Alzheimer atau gangguan tingkah laku. Obat i'),
(42, 'Saccharomyces', 88, 'Saccharomyces adalah salah salah satu jenis ragi yang termasuk probiotik dan memiliki peranan dalam menjaga kesehatan saluran pencernaan manusia. Jenis ragi Saccharomyces yang digunakan sebagai komponen utama probiotik adalah Saccharomyces boulardii. Probi'),
(43, 'Salonpas', 68, 'Salonpas bermanfaat untuk meredakan nyeri pada otot dan sendi yang disebabkan oleh otot yang tertarik, keseleo, dan radang sendi. Salonpas tidak bisa mengatasi penyebab nyeri pada otot, dan hanya meredakan rasa nyeri untuk sementara. Salonpas tersedia dala'),
(44, 'Sanmol', 37, 'Sanmol bermanfaat untuk menurunkan demam dan meredakan nyeri. Obat ini dapat digunakan oleh anak-anak hingga orang dewasa, serta dijual bebas tanpa resep dokter.  Sanmol mengandung bahan aktif paracetamol. Kandungan ini sering digunakan untuk mengatasi dem'),
(45, 'Scott’s Emulsion', 98, 'Scott’s Emulsion bermanfaat untuk mencukupi kebutuhan tubuh akan vitamin A dan vitamin D. Suplemen ini diperuntukkan bagi anak-anak usia 1-12 tahun.  Scott’s Emulsion merupakan suplemen multivitamin dengan kandungan vitamin dan mineral yang penting bagi an'),
(46, 'Stimuno Anak', 78, 'Stimuno syrup atau Stimuno anak adalah obat yang berfungsi untuk meningkatkan daya tahan tubuh (sistem imun). Obat ini mengandung bahan aktif meniran hijau (Phyllanthus niruri).  Dengan meningkatnya daya tahan tubuh, Stimuno anak dapat mencegah penyakit at'),
(47, 'Tempra', 32, 'Tempra bermanfaat untuk meredakan demam, sakit kepala, sakit gigi, rasa nyeri, dan demam setelah vaksinasi. Obat ini tersedia dalam dua bentuk, yaitu obat tetes dan sirop.   Tempra mengandung bahan aktif paracetamol. Bahan ini memiliki efek antipiretik (me'),
(48, 'Tetracycline Hcl', 72, 'Tetracycline hcl adalah antibiotik yang digunakan untuk mengobati berbagai sejumlah infeksi yang disebabkan oleh bakteri, seperti Haemophilus influenzae, Streptococcus pneumoniae, Mycoplasma pneumoniae, Chlamydia psittaci, Chlamydia trachomatis, dan Neisse'),
(49, 'Tolak Angin', 88, 'Tolak Angin bermanfaat untuk mengatasi masuk angin, dengan gejala berupa mual, perut kembung, serta demam atau meriang. Tolak Angin dijual bebas di apotik atau supermarket dalam bentuk cair, serbuk, dan permen.  Dalam mengatasi masuk angin, ada beberapa ba'),
(50, 'Vaksin Hepatitis B', 58, 'Vaksin hepatitis B adalah vaksin yang digunakan untuk mencegah infeksi hati, akibat virus hepatitis B. Vaksin ini bekerja dengan merangsang sistem kekebalan tubuh, agar menghasilkan antibodi yang dapat melawan virus.'),
(51, 'Vaksin Campak', 44, 'Vaksin campak adalah vaksin untuk mencegah penyakit campak, yang mulai diberikan pada anak usia 9 bulan. Pemberian vaksin ini masuk ke dalam program imunisasi rutin lengkap yang dianjurkan oleh pemerintah Indonesia.'),
(52, 'Vitamin A', 86, 'Vitamin A adalah salah satu vitamin yang berfungsi untuk perkembangan dan kinerja berbagai organ tubuh, seperti mata, kulit, organ reproduksi, dan sistem kekebalan tubuh.  Vitamin A dapat ditemukan dalam berbagai makanan, seperti hati sapi, susu, keju, yog'),
(53, 'Vitamin B1', 55, 'Vitamin B1 atau tiamin adalah salah satu vitamin yang berguna dalam merubah karbohidrat menjadi energi untuk tubuh, terutama otak dan sistem saraf. Vitamin B1 dapat dijumpai dalam berbagai makanan, seperti sereal, daging sapi, kacang-kacangan, dan telur.'),
(54, 'Vitamin B9 (Asam Folat)', 60, 'Vitamin B9 atau asam folat adalah salah satu zat yang dibutuhkan untuk pertumbuhan dan pemeliharaan kesehatan tubuh, salah satunya dalam memproduksi sel darah merah. Selain itu, vitamin B9 juga dibutuhkan oleh ibu hamil untuk mencegah penyakit spina bifida'),
(55, 'Vitamin C', 87, 'Ascorbic acid atau vitamin C adalah nutrisi pembentuk kolagen, yaitu zat yang dibutuhkan untuk memperbaiki kulit, tulang, dan gigi. Vitamin C bisa diperoleh secara alami dari buah dan sayur.  Vitamin C alami bisa diperoleh dari berbagai jenis buah dan sayu'),
(56, 'Vitamin E', 93, 'Alfa tokoferol atau vitamin E adalah jenis vitamin yang berfungsi untuk memelihara kesehatan kulit, kesuburan organ reproduksi, mata, sel darah, dan otak. Vitamin E alami terdapat pada makanan sehari-hari.  Sumber Vitamin E utama dari makanan sehari-hari a'),
(57, 'Vitamin D', 80, 'Vitamin D adalah nutrisi yang bermanfaat untuk pembentukan tulang. Vitamin D juga diperlukan tubuh untuk menjaga kesehatan jantung, otak, dan otot.  Vitamin D terbentuk secara alami ketika kulit terkena sinar matahari langsung. Bahkan, sebagian besar kebut'),
(58, 'Vitamin K', 77, 'Vitamin K adalah nutrisi yang diperlukan tubuh dalam proses pembekuan darah. Vitamin K terkandung secara alami di dalam makanan dan tersedia dalam bentuk suplemen tambahan.  Sumber utama vitamin K adalah sayuran dan buah-buahan. Jenis sayuran yang mengandu'),
(59, 'Zat Besi', 10, 'Zat besi adalah salah satu mineral yang berperan penting untuk membentuk hemoglobin di dalam sel darah merah. Hemoglobin bertugas mengikat dan mengirimkan oksigen ke seluruh tubuh.   Kekurangan zat besi dalam tubuh bisa menyebabkan anemia defisiensi besi. '),
(60, 'Zoledronic Acid', 32, 'Zoledronic acid adalah obat yang digunakan untuk mengatasi kadar kalsium yang terlalu tinggi dalam darah (hiperkalsemia) pada penderita kanker. Selain itu, zoledronic acid juga digunakan untuk mengatasi penyakit pada tulang, misalnya kanker yang menyebar k'),
(61, 'Zinc Sulphate', 64, 'Zinc adalah mineral yang berperan penting dalam pertumbuhan, perkembangan, serta untuk menjaga kesehatan jaringan tubuh. Zinc banyak terdapat pada daging sapi, daging ayam, dan kacang-kacangan.  Zinc bermanfaat untuk membantu penyembuhan luka, memperkuat s'),
(62, 'Zolpidem', 22, 'Zolpidem adalah obat yang digunakan untuk menangani insomnia pada orang dewasa. Insomnia merupakan kondisi di mana seseorang mengalami kesulitan untuk tidur atau tidak bisa tidur cukup sesuai dengan waktu yang dibutuhkan, meski dapat melakukannya. Tak hany'),
(63, 'Oskadon', 46, 'Oskadon bermanfaat untuk meredakan sakit kepala, sakit gigi, nyeri, serta menurunkan demam. Obat ini hanya tersedia dalam bentuk tablet.  Oskadon mengandung bahan aktif paracetamol, ibuprofen, dan caffeine anhydrous. Kombinasi obat ini bekerja dengan cara ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `date_created`, `alamat`, `kota`) VALUES
(1, 'Fitriono Arya Riski', 'aryariski9a@gmail.com', 'myfoto3.jpg', '$2y$10$tnio1Fxe1gRLpGhaN3IpJef5A7u.G.Fh6S0CUAT37pY5uMQSOhzvO', 1, 1587709064, 'Jl.telekomunikasi', 'Bandung'),
(15, 'Arya Riski', 'fariaski05@yahoo.com', 'default.jpg', '$2y$10$Zz53J5VSDWhGUrCOKzi5pu4a2PD9rjK6MMzAp8SorVY6fETnoNg7i', 2, 1587709107, 'Jl.Tentara Pelajar', 'Pemalang'),
(16, 'Adi Rizaldi', 'adirizaldi@gmail.com', 'default.jpg', '$2y$10$h8NEBGJ49UpLqiDuEryEKet/06fbr5LKkWFIikGzhYkOhJ32O3Vfq', 1, 1587709119, 'Jl.Almahera Bojongbata', 'Pemalang'),
(17, 'Fauzi Maulana Nugraha', 'fauzinugraha@gmail.com', 'default.jpg', '$2y$10$2EwPUPM6QrLr.ng1flSF0uZQVDGbj6hRMRwyM/PXjTFd1wc29Kmbm', 2, 1587733201, '', ''),
(18, 'Elqi Ashok', 'elqiashok@gmail.com', 'default.jpg', '$2y$10$e89vBiaPpwHo6Be36FmVm.6l/tp/DMV5mNOP30TaNssSsDhO4msQq', 2, 1587734282, 'Jl.Pangeran No.5', 'Cirebon'),
(19, 'Elqi', 'elqi@gmail.com', 'default.jpg', '$2y$10$zSSLP2Gdliw1s4eR4U6o6OtYrVIS53QUWRYLXvE1b.YqSFpTnUJp.', 1, 1587793743, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keranjang_user`
--
ALTER TABLE `keranjang_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang_user`
--
ALTER TABLE `keranjang_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
