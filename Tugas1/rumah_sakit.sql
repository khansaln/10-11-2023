-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 06:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `nama_penyakit` varchar(200) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id_diagnosa`, `nama_penyakit`, `keterangan`) VALUES
(1, 'Jantung koroner ', 'Adanya penyumbatan pada pembuluh darah arteri oleh tumpukan plak maupun zat-zat kimia dari makanan dan minuman. Hal tersebut membuat adanya penggumpalan darah pada bagian arteri sehingga aliran darah terganggu.'),
(2, 'Katarak', 'Menyebabkan lensa mata menjadi berawan, sehingga penglihatan tampak kabur pada awalnya'),
(3, 'Hipertensi', 'Tingginya tekanan darah lebih dari 200'),
(4, 'Diabetes', 'Tingginya kadar gula darah di dalam tubuh'),
(5, 'Toxoplasma', 'Terhirupnya bulu kucing oleh ibu hamil'),
(6, 'Gerd', 'Naiknya kadar asam di dalam lambung yang terasa nyeri sampai ke dada'),
(7, 'Maag', 'Naiknya kadar asam lambung, terasa nyeri di bagian perut sebelah kiri'),
(8, 'Preklmasia', 'Darah tinggi yang terjadi pada ibu hamil'),
(9, 'Osteoporosis', 'Tulang mulai kehilangan kekuatannya karena kekurangan kalsium'),
(10, 'Plasenta Previa', 'Terlilitnya janin oleh tali plasenta');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
(1, 'dr. Martin', 'Jantung', 'Jalan Duku, Padang', '087799030211'),
(2, 'dr. Agust', 'Mata', 'Jalan Apel, Aceh', '082345345674'),
(3, 'dr. Bertha', 'Penyakit Dalam', 'Jalan Apel Hijau, Aceh', '089976543871'),
(4, 'dr. Dedeh', 'Saraf', 'Jalan Cuka, Aceh', '08784567432'),
(5, 'dr. Bintang', 'THT', 'Jalan Mangga, Padang', '0877456543'),
(6, 'dr. Christianus', 'Anak', 'Jalan Pelita Raya, Bukittinggi', '089965432167'),
(7, 'dr. Dini', 'SPOG', 'Jalan Merpati, Aceh', '087634567890'),
(8, 'dr. Andhi', 'Orthopedi', 'Jalan Ancol, Bukittinggi', '087834567231'),
(9, 'dr. Jaya', 'Jantung', 'Jalan Dukuh Atas, Padang', '087965438976'),
(10, 'dr. Yudi', 'SPOG', 'Jalan Jukut Raya, Padang', '089765432134'),
(11, 'dr. Robi', 'SPOG', 'Jalan Putih, Aceh', '089765783213');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_diagnosa` int(11) NOT NULL,
  `tgl_berobat` date NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_pasien`, `id_dokter`, `id_diagnosa`, `tgl_berobat`, `keluhan`) VALUES
(1, 1, 1, 1, '2023-09-29', 'Nyeri dada atau ketidaknyamanan pada dada yang menjalar ke leher, rahang, bahu, dan tangan sisi kiri, punggung, perut sisi kiri (sering dianggap maag). Keringat dingin, mual, muntah, atau mudah lelah.'),
(2, 2, 2, 2, '2023-09-29', 'Mata saat melihat kabur, jarak pandang tidak terlihat'),
(3, 5, 3, 4, '2023-11-01', 'Kepala terasa pusing, perut mual mual'),
(4, 3, 3, 6, '2023-11-01', 'Perut terasa sakit hingga ke dada');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  `jenis_obat` enum('sirup','kapsul','tablet','tetes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `harga`, `jenis_obat`) VALUES
(1, 'Lanosterol', 60000, 'tetes'),
(2, 'Norvask', 10000, 'tablet');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `alamat`, `no_telp`) VALUES
(1, 'Anton', 'Jalan Durian, Jakarta', '081234567890'),
(2, 'Joko', 'Jalan Mangga, Medan', '081234564543'),
(3, 'Joko', 'Jalan Veteran VIII, Aceh', '089765432782'),
(4, 'Dodo', 'Jalan Bentang X, Aceh', '089765443213'),
(5, 'Tintin', 'Jalan Ranca II, Aceh', '08976543878'),
(6, 'Asfi', 'Jalan Wafa Raya, Aceh', '098765439087'),
(7, 'Wahyu', 'Jalan Mangga Raya, Aceh', '098790876543'),
(8, 'Nina', 'Jalan Malabar, Padang', '089765564323'),
(9, 'Mayang', 'Jalan Puspa, Padang', '098765468908'),
(10, 'Aura', 'Jalan Datar Puspa, Aceh', '0987654654321');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_resep` int(11) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `metode_pembayaran` enum('debit','tunai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_resep`, `total_harga`, `metode_pembayaran`) VALUES
(1, 1, 30000, 'tunai'),
(2, 2, 60000, 'debit');

-- --------------------------------------------------------

--
-- Table structure for table `resep_obat`
--

CREATE TABLE `resep_obat` (
  `id` int(11) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_obat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resep_obat`
--

INSERT INTO `resep_obat` (`id`, `id_konsultasi`, `id_obat`, `jumlah_obat`) VALUES
(1, 1, 2, 3),
(2, 2, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `FK_pasien` (`id_pasien`),
  ADD KEY `FK_dokter` (`id_dokter`),
  ADD KEY `FK_diagnosa` (`id_diagnosa`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_resepobat` (`id_resep`);

--
-- Indexes for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_obat` (`id_obat`),
  ADD KEY `FK_konsultasi` (`id_konsultasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resep_obat`
--
ALTER TABLE `resep_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `FK_diagnosa` FOREIGN KEY (`id_diagnosa`) REFERENCES `diagnosa` (`id_diagnosa`),
  ADD CONSTRAINT `FK_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `FK_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `FK_resepobat` FOREIGN KEY (`id_resep`) REFERENCES `resep_obat` (`id`);

--
-- Constraints for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD CONSTRAINT `FK_konsultasi` FOREIGN KEY (`id_konsultasi`) REFERENCES `konsultasi` (`id_konsultasi`),
  ADD CONSTRAINT `FK_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
