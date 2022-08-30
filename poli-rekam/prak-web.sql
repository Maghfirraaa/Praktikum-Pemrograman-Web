-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 02:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak-web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_telp` varchar(100) NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`, `foto`) VALUES
('4c3fd782-1aee-4abc-ab4a-5404de024324', 'Dr. Thoriq', 'Gigi', 'Malang', '0822446237724', 'gambar/doctor_male_96px.png'),
('8e5df6c9-5cc5-47c0-9e7a-757a06679455', 'Dr. Sri Yuswanti, Sp.M', 'Mata', 'Malang', '082442187664', 'gambar/doctor_female_128px.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenispoli`
--

CREATE TABLE `tb_jenispoli` (
  `id_pol` varchar(50) NOT NULL,
  `jenis_poli` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenispoli`
--

INSERT INTO `tb_jenispoli` (`id_pol`, `jenis_poli`, `keterangan`) VALUES
('06d9aaf3-e674-4e74-9f00-d9f72cbdafec', 'Poli Mata', 'Layanan pemeriksaan dan pengobatan terhadap Mata'),
('0998141e-fe49-4849-be59-12aa5516167b', 'Poli Gigi', 'Layanan pemeriksaan dan pengobatan terhadap Gigi'),
('4b2a8013-9285-42cd-b43d-8a323e318670', 'Poli Anak', 'Layanan pemeriksaan dan pengobatan terhadap bayi dan Anak'),
('4b9e385b-dc78-4d1b-960a-17cc7f9fd033', 'Poli Umum', 'Layanan berupa pemeriksaan kesehatan, pengobatan dan penyuluhan'),
('5eeeccec-e2ec-4cb7-9495-73ee54acaab2', 'Poli Kulit dan Kelamin', 'Layanan pemeriksaan dan pengobatan terhadap Kulit dan Kelamin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelamin`
--

CREATE TABLE `tb_kelamin` (
  `id_kel` varchar(50) NOT NULL,
  `jen_kel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelamin`
--

INSERT INTO `tb_kelamin` (`id_kel`, `jen_kel`) VALUES
('Laki-Laki', 'Laki-Laki'),
('Perempuan', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(50) DEFAULT NULL,
  `ket_obat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`) VALUES
('133879de-92ec-4da0-b54f-3a32cfed7fc1', 'Oxycodone', 'Obat penghilang rasa sakit / nyeri'),
('220a985f-3326-4087-84b3-492a739cd10e', 'Ibuprofen', 'Meredakan inflamasi atau peradangan.'),
('dfff7824-6d03-40bf-9e47-98f2fb6e6b01', 'Hydrochlorothiazide', 'Obat edema dan tekanan darah tinggi'),
('ea05c558-e4b3-4469-81d3-ef118cbf577c', 'Paracetamol', 'Mengobati panas demam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `nomor_identitas` varchar(100) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `id_kel` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `statuss` varchar(50) DEFAULT NULL,
  `umur` varchar(50) DEFAULT NULL,
  `tkd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama_pasien`, `id_kel`, `alamat`, `no_telp`, `statuss`, `umur`, `tkd`) VALUES
('e89447e1-69fb-4130-8711-a8e091125df8', '29990411181', 'M. Ridhuan', 'Laki-Laki', 'Lumajang', '087664223565', 'Mahasiswa', '20', '120'),
('f81df9f7-d6cc-4892-a5b7-176c69767af4', '30000922146', 'Riki Septian', 'Laki-Laki', 'Malang', '082334887342', 'Mahasiswa', '20', '120');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` varchar(50) NOT NULL,
  `nm_penyakit` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `nm_penyakit`, `keterangan`) VALUES
('35194a88-2e8c-4b53-94a3-ddb2a6a75a9b', 'Flu', 'Hidung tersumbat.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_pet` int(11) NOT NULL,
  `nama_pet` varchar(50) DEFAULT NULL,
  `panggilan` varchar(50) DEFAULT NULL,
  `no_identitas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_pet`, `nama_pet`, `panggilan`, `no_identitas`) VALUES
(8, 'fikri', 'petugas', 'petugas');

--
-- Triggers `tb_petugas`
--
DELIMITER $$
CREATE TRIGGER `tb_petugas_after_insert` AFTER INSERT ON `tb_petugas` FOR EACH ROW BEGIN
INSERT INTO tb_user (id_user, nama_user, username,password,LEVEL) VALUES (NEW.id_pet, NEW.nama_pet, NEW.panggilan,SHA1(NEW.no_identitas),'2');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `lokasi`) VALUES
('2be1cb0d-b67e-4795-ac0e-4974972d9323', 'Klinik Husada', 'Jl. Sudimoro No.16, Malang'),
('81295dbb-a9aa-4b86-8c9c-1a2c25a1e91a', 'Klinik Bunga Melati', 'Jl. Jaksa Agung Suprapto No. 23 Malang'),
('c345d1c2-a9a7-4d93-ba83-f9b82803f839', 'Klinik Gigi Esthetic', 'Jl. Raya Danau Toba E9-01 Malang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` varchar(50) NOT NULL,
  `tgl_periksa` varchar(50) DEFAULT NULL,
  `id_pol` varchar(50) DEFAULT NULL,
  `id_poli` varchar(50) DEFAULT NULL,
  `id_pasien` varchar(50) DEFAULT NULL,
  `keluhan` varchar(50) DEFAULT NULL,
  `id_dokter` varchar(50) DEFAULT NULL,
  `id_tindakan` varchar(50) DEFAULT NULL,
  `id_obat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `tgl_periksa`, `id_pol`, `id_poli`, `id_pasien`, `keluhan`, `id_dokter`, `id_tindakan`, `id_obat`) VALUES
('60fd5c40-64ae-4207-b8d8-dcf62f24c507', '2021-06-06', '0998141e-fe49-4849-be59-12aa5516167b', '81295dbb-a9aa-4b86-8c9c-1a2c25a1e91a', 'f81df9f7-d6cc-4892-a5b7-176c69767af4', '<p>Gusi Sakit</p>\r\n', '4c3fd782-1aee-4abc-ab4a-5404de024324', '85ffe553-5a0e-4465-a168-833fed5869a7', 'ea05c558-e4b3-4469-81d3-ef118cbf577c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id` varchar(50) NOT NULL,
  `id_rm` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rm_obat`
--

INSERT INTO `tb_rm_obat` (`id`, `id_rm`, `id_obat`) VALUES
('', '9ba890e2-1da2-41c3-8f8f-0551542aad0a', 'ea05c558-e4b3-4469-81d3-ef118cbf577c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tindakan`
--

CREATE TABLE `tb_tindakan` (
  `id_tindakan` varchar(50) NOT NULL,
  `jenis` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tindakan`
--

INSERT INTO `tb_tindakan` (`id_tindakan`, `jenis`) VALUES
('05beb7d9-ba7a-4303-a5c9-8dfc3e56abff', 'Cabut Gigi'),
('21c8a39b-53ad-42f5-9eaf-b75bd8394510', 'Diberikan Tetes Mata'),
('22a97a07-6d2c-4c59-ad50-c8b85cda6263', 'Rujuk Rumah Sakit'),
('85ffe553-5a0e-4465-a168-833fed5869a7', 'Diberikan Obat / Vitamin'),
('9a3fe95f-750a-4be8-965b-d5efbe95a6cc', 'Pasang Behel'),
('ccc92e15-fc8a-4ac1-ac46-89b46508791a', 'Di vaksin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('8', 'fikri', 'petugas', '670489f94b6997a870b148f74744ee5676304925', '2'),
('98731216336846848', 'Arif Rusman', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1'),
('a5d57764-c601-11eb-a69d-3c2c30f88962', 'fikri', 'admin3', '33aab3c7f01620cade108f488cfd285c0e62c1ec', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_jenispoli`
--
ALTER TABLE `tb_jenispoli`
  ADD PRIMARY KEY (`id_pol`);

--
-- Indexes for table `tb_kelamin`
--
ALTER TABLE `tb_kelamin`
  ADD PRIMARY KEY (`id_kel`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_pet`);

--
-- Indexes for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`) USING BTREE,
  ADD KEY `id_pol` (`id_pol`),
  ADD KEY `id_poli` (`id_poli`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_tindakan` (`id_tindakan`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_rm` (`id_rm`);

--
-- Indexes for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `FK_tb_rekammedis_tb_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`),
  ADD CONSTRAINT `FK_tb_rekammedis_tb_jenispoli` FOREIGN KEY (`id_pol`) REFERENCES `tb_jenispoli` (`id_pol`),
  ADD CONSTRAINT `FK_tb_rekammedis_tb_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `FK_tb_rekammedis_tb_poliklinik` FOREIGN KEY (`id_poli`) REFERENCES `tb_poliklinik` (`id_poli`),
  ADD CONSTRAINT `FK_tb_rekammedis_tb_tindakan` FOREIGN KEY (`id_tindakan`) REFERENCES `tb_tindakan` (`id_tindakan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
