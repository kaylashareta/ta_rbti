-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 08:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rbti`
--

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_hak` int(11) NOT NULL,
  `keterangan` varchar(60) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak`, `keterangan`, `hak_akses`) VALUES
(1, 'Admin', 1),
(2, 'Panitia', 2),
(3, 'Juri', 3),
(4, 'Peserta', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `nip_admin` varchar(50) NOT NULL,
  `nohp_admin` varchar(20) NOT NULL,
  `date_admin` date NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `id_user`, `nama_admin`, `nip_admin`, `nohp_admin`, `date_admin`, `added_by`) VALUES
(1, 0, 'admin01', 'admin01', 'Kayla Shareta', '0000-00-00', ''),
(2, 0, 'admin02', 'admin02', 'Kireina Shamara', '0000-00-00', ''),
(5, 21, 'admin 2', '12', '21', '2021-08-10', 'admin@gmail.com'),
(6, 22, 'admin 3', '12', '21', '2021-08-10', 'admin@gmail.com'),
(7, 23, 'admin 4', '3', '5', '2021-08-10', 'admin@gmail.com'),
(8, 25, 'admin 5', '12', '23', '2021-08-10', 'admin2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL,
  `foto_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `foto_artikel`) VALUES
(2, 'Hacker', 'hacker hacker hacker hacker', 'EvelTeMVgAEZ8sj.jpg'),
(4, 'hipster', 'hipster hipster hipster', 'EveX5PRUcAIAgTX1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodatatim`
--

CREATE TABLE `tb_biodatatim` (
  `id_bt` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nama_hustler` varchar(255) NOT NULL,
  `alamat_hustler` text NOT NULL,
  `telp_hustler` varchar(255) NOT NULL,
  `email_hustler` varchar(255) NOT NULL,
  `tugas_hustler` text NOT NULL,
  `nama_hipster` varchar(255) NOT NULL,
  `alamat_hipster` text NOT NULL,
  `telp_hipster` varchar(255) NOT NULL,
  `email_hipster` varchar(255) NOT NULL,
  `tugas_hipster` text NOT NULL,
  `nama_hacker` varchar(255) NOT NULL,
  `alamat_hacker` text NOT NULL,
  `telp_hacker` varchar(255) NOT NULL,
  `email_hacker` varchar(255) NOT NULL,
  `tugas_hacker` text NOT NULL,
  `date_added` date NOT NULL,
  `date_updated` date NOT NULL,
  `finalisasi` int(11) NOT NULL,
  `date_finalisasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biodatatim`
--

INSERT INTO `tb_biodatatim` (`id_bt`, `id_user`, `id_proposal`, `nama_hustler`, `alamat_hustler`, `telp_hustler`, `email_hustler`, `tugas_hustler`, `nama_hipster`, `alamat_hipster`, `telp_hipster`, `email_hipster`, `tugas_hipster`, `nama_hacker`, `alamat_hacker`, `telp_hacker`, `email_hacker`, `tugas_hacker`, `date_added`, `date_updated`, `finalisasi`, `date_finalisasi`) VALUES
(17, 12, 22, 'KAYLA SHARETA', '<p>kudus</p>\r\n', '082213588906', 'sskaylandn@gmail.com', '<p>tugas kayla</p>\r\n', 'KARTIKA DEWI LARASATI', 'cilacap', '082938475869', 'kdewilarasati@gmail.com', 'tugas kartika', 'ELSA DIAH AYU', 'karanganyar', '082938475869', 'elsa@gmail.com', 'tugas elsa', '2021-08-18', '2021-08-19', 1, '2021-08-21'),
(18, 14, 0, 'HUSTLER KARTIKA', '<p>alamat kartik</p>\r\n', '45', 'email@kartik.com', '<p>t hustler kartik</p>\r\n', 'HIPSTER KARTIKA', 'alamat kartik', '3118045', 'kartik@gmail.hipster', 't hipster kartik', 'HACKER KARTIKA', 'alamat hacker kartik', '3118045', 'kartik@hacker.com', 't hacker kartik', '2021-08-21', '2021-08-21', 1, '2021-08-21'),
(22, 13, 27, 'GG', '<p>gtgt</p>\r\n', '8', 'sskaylandn@gmail.com', '<p>gbgb</p>\r\n', 'GGB', 'gbbg', '9', 'njyhjh@rfgr.fef', 'bgbgb', 'GBBG', 'bgb', '0', 'elsa@gmail.com', 'fvvf', '2021-08-25', '0000-00-00', 1, '2021-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_juri`
--

CREATE TABLE `tb_juri` (
  `id_juri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_juri` varchar(255) NOT NULL,
  `nik_juri` varchar(255) NOT NULL,
  `nohp_juri` varchar(25) NOT NULL,
  `date_juri` date NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_juri`
--

INSERT INTO `tb_juri` (`id_juri`, `id_user`, `nama_juri`, `nik_juri`, `nohp_juri`, `date_juri`, `added_by`) VALUES
(11, 31, 'juri 2', '123456', '234567', '2021-08-10', 'admin2@gmail.com'),
(12, 17, 'juri 1', '123456', '67890', '2021-08-09', 'admin2@gmail.com'),
(13, 36, 'Juri Tiga', '33', '033', '2021-08-14', 'panitia3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kec` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kota`
--

CREATE TABLE `tb_kota` (
  `id_kota` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kota`
--

INSERT INTO `tb_kota` (`id_kota`, `id_prov`, `kota`) VALUES
(1, 1, 'Kab. aceh barat'),
(6, 1, 'Kab. aceh barat daya'),
(7, 1, 'Kab. aceh besar'),
(8, 1, 'Kab. aceh jaya'),
(9, 1, 'Kab. aceh selatan'),
(10, 1, 'Kab. aceh singkil'),
(11, 1, 'Kab. aceh tamiang'),
(12, 1, 'Kab. aceh tengah'),
(13, 1, 'Kab. Aceh tenggara'),
(14, 1, 'Kab. Aceh timur'),
(15, 1, 'Kab. Aceh utara'),
(16, 1, 'Kab. bener meriah'),
(17, 1, 'Kab. bireuen'),
(18, 1, 'Kab. gayo lues'),
(19, 1, 'Kab.  nagan raya'),
(20, 1, 'Kab. pidie'),
(21, 1, 'Kab. pidie jaya'),
(22, 1, 'Kab. simeulue'),
(23, 1, 'Kota banda aceh'),
(24, 1, 'Kota langsa'),
(25, 1, 'Kota lhokseumawe'),
(26, 1, 'Kota sabang'),
(27, 1, 'Kota subulussalam'),
(28, 18, 'Kab. Badung'),
(29, 18, 'Kab. Bangli'),
(30, 18, 'Kab. Buleleng'),
(31, 18, 'Kab. Gianyar'),
(32, 18, 'Kab. Jembrana'),
(33, 18, 'Kab. Karang Asem'),
(34, 18, 'Kab. Klungkung'),
(35, 18, 'Kab. Tabanan'),
(36, 18, 'Kota Denpasar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kriteria`) VALUES
(1, 'Kreativitas Ide Bisnis'),
(2, 'Orisionalitas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_proposal`
--

CREATE TABLE `tb_master_proposal` (
  `id_proposal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_proposal` text NOT NULL,
  `tema_proposal` varchar(255) NOT NULL,
  `date_added` date NOT NULL,
  `date_updated` date NOT NULL,
  `finalisasi` int(11) NOT NULL,
  `date_finalisasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_master_proposal`
--

INSERT INTO `tb_master_proposal` (`id_proposal`, `id_user`, `judul_proposal`, `tema_proposal`, `date_added`, `date_updated`, `finalisasi`, `date_finalisasi`) VALUES
(22, 12, 'SI-HAKII', 'Sistem Informasi', '2021-08-17', '2021-08-21', 1, '2021-08-21'),
(23, 14, 'JUDUL KARTIKA', 'Game', '2021-08-21', '0000-00-00', 1, '2021-08-21'),
(27, 13, 'COBA', 'Artifical Intelegence', '2021-08-25', '2021-08-25', 1, '2021-08-25'),
(28, 32, 'PROPOSAL PESERTA ENAM', 'Security', '2021-08-25', '0000-00-00', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_panitia`
--

CREATE TABLE `tb_panitia` (
  `id_panitia` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_panitia` varchar(255) NOT NULL,
  `nim_panitia` varchar(255) NOT NULL,
  `nohp_panitia` varchar(255) NOT NULL,
  `date_panitia` date NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_panitia`
--

INSERT INTO `tb_panitia` (`id_panitia`, `id_user`, `nama_panitia`, `nim_panitia`, `nohp_panitia`, `date_panitia`, `added_by`) VALUES
(1, 30, 'panitia 2', '12', '23', '2021-08-10', 'admin2@gmail.com'),
(2, 16, 'panitia', 'M3118046', '082213588906', '2021-08-09', 'admin@gmail.com'),
(3, 33, 'Panitia Tiga', 'M3118045', '08', '2021-08-14', 'panitia@gmail.com'),
(4, 34, 'Panitia Empat', 'M3118044', '08', '2021-08-14', 'panitia@gmail.com'),
(5, 35, 'panitia lima', 'm3118055', '5', '2021-08-14', 'panitia3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paper_pitching`
--

CREATE TABLE `tb_paper_pitching` (
  `id_pp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `latar_belakang_pp` text NOT NULL,
  `permasalahan_pp` text NOT NULL,
  `solusi_pp` text NOT NULL,
  `progres_pp` text NOT NULL,
  `kompetitor_pp` text NOT NULL,
  `kompetitor2_pp` text NOT NULL,
  `target_pp` text NOT NULL,
  `data_pp` text NOT NULL,
  `proses_bisnis_pp` text NOT NULL,
  `proses_bisnis2_pp` text NOT NULL,
  `tahapan_pp` text NOT NULL,
  `kelebihan_pp` text NOT NULL,
  `date_added` date NOT NULL,
  `date_updated` date NOT NULL,
  `finalisasi` int(11) NOT NULL,
  `date_finalisasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paper_pitching`
--

INSERT INTO `tb_paper_pitching` (`id_pp`, `id_user`, `id_proposal`, `latar_belakang_pp`, `permasalahan_pp`, `solusi_pp`, `progres_pp`, `kompetitor_pp`, `kompetitor2_pp`, `target_pp`, `data_pp`, `proses_bisnis_pp`, `proses_bisnis2_pp`, `tahapan_pp`, `kelebihan_pp`, `date_added`, `date_updated`, `finalisasi`, `date_finalisasi`) VALUES
(2, 0, 0, 'hwofhoiehe ieowofhoifhwofhf oehwfofhfohhe ohowefhofhofh oefwhfohfeh oefhofehfohfoh ofhofhofheofh owefhoefhofhofh ofoefhohfwfh ohfoefhofheofi owfhoefhofhfh owfhoefhofhfohw ohd wxxhiwh fvb kfboebf bcwefboicb dowhohvnveof ofhnofboeid nfowbfiofo cbfowefboief fbwofbeoifei foieifnowifeoifn oefhoefihewf\r\nnowehowefhfoe oifwhoeiwfhfh fieohfofho ofoiweeofefobfo oihceoifeiofher', 'ssLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ssddddLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sskkkkLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ssffffLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sswwwwLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ssttttLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ssiiiiLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ssooooLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Et16DOFUcAAChYa1.jpg', 'dwfgewhrLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'kkkkkLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00', '0000-00-00', 0, '0000-00-00'),
(9, 12, 22, '<p>latar belakang pp</p>\r\n', '<p>permasalahan pp</p>\r\n', '<p>solusi pp</p>\r\n', '<p>progres pp</p>\r\n', '<p>kompetitor pp</p>\r\n', '<p>usaha serupa pp</p>\r\n', '<p>target pp</p>\r\n', '<p>data pp</p>\r\n', '<p>proses bisnis pp</p>\r\n', 'struktur-organisasi-1-771x1024.jpg', '<p>proses pp</p>\r\n', '<p>kelebihan pp</p>\r\n', '2021-08-19', '0000-00-00', 1, '2021-08-21'),
(10, 14, 0, '<p>lb&nbsp;KARTIKA</p>\r\n', '<p>permas&nbsp;KARTIKA</p>\r\n', '<p>solusi&nbsp;KARTIKA</p>\r\n', '<p>progres&nbsp;KARTIKA</p>\r\n', '<p>kompetitor&nbsp;KARTIKA</p>\r\n', '<p>usaha&nbsp;KARTIKA</p>\r\n', '<p>target&nbsp;KARTIKA</p>\r\n', '<p>data&nbsp;KARTIKA</p>\r\n', '<p>pb&nbsp;KARTIKA</p>\r\n', 'struktur-organisasi-1-771x1024.jpg', '<p>proses&nbsp;KARTIKA</p>\r\n', '<p>kelebihan&nbsp;KARTIKA</p>\r\n', '2021-08-21', '0000-00-00', 1, '2021-08-21'),
(11, 13, 27, '<p>hgbbg</p>\r\n', '<p>brfd</p>\r\n', '<p>bfdr</p>\r\n', '<p>bg</p>\r\n', '<p>jmn</p>\r\n', '<p>nhjhm</p>\r\n', '<p>tgrfv</p>\r\n', '<p>bgfb</p>\r\n', '<p>gbf</p>\r\n', 'WhatsApp_Image_2021-07-31_at_12_37_54_AM_(1).jpeg', '<p>vfd</p>\r\n', '<p>rfde</p>\r\n', '2021-08-25', '0000-00-00', 1, '2021-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `jumlah_bayar` varchar(50) NOT NULL,
  `rek_transfer` varchar(20) NOT NULL,
  `nama_transfer` varchar(255) NOT NULL,
  `bukti_transfer` varchar(255) NOT NULL,
  `status_bayar` int(11) NOT NULL,
  `date_added` date NOT NULL,
  `verif_by` varchar(255) NOT NULL,
  `date_verif` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_bayar`, `id_user`, `tanggal_bayar`, `jumlah_bayar`, `rek_transfer`, `nama_transfer`, `bukti_transfer`, `status_bayar`, `date_added`, `verif_by`, `date_verif`) VALUES
(6, 12, '2021-08-17', '7', 'BRI', 'Kayla Shareta Andien', 'cutting_sesuai_bentuk_4x4cm1.png', 1, '2021-08-17', 'panitia2@gmail.com', '2021-08-21'),
(8, 14, '2021-08-18', '50000', 'BCA', 'Kartik', 'Certificate_(1).jpg', 1, '2021-08-18', 'panitia2@gmail.com', '2021-08-25'),
(9, 13, '2021-08-21', '50000', 'BCA', 'Elsa Diah Ayu', 'WhatsApp_Image_2021-07-31_at_12_13_10_PM.jpeg', 1, '2021-08-21', 'panitia2@gmail.com', '2021-08-25'),
(10, 32, '2021-08-26', '50000', 'BRI', 'Peserta Enam', 'Certificate_(1).jpg', 1, '2021-08-25', 'panitia@gmail.com', '2021-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `id_juri` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `date_penilaian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_daftar` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `nik_peserta` varchar(30) NOT NULL,
  `nohp_peserta` varchar(15) NOT NULL,
  `prov_peserta` varchar(50) NOT NULL,
  `kota_peserta` varchar(50) NOT NULL,
  `alamat_peserta` text NOT NULL,
  `institusi_peserta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_daftar`, `id_user`, `nama_peserta`, `nik_peserta`, `nohp_peserta`, `prov_peserta`, `kota_peserta`, `alamat_peserta`, `institusi_peserta`) VALUES
(9, '12', 'Kayla Shareta Andien', '2147483647', '2147483647', '', '', 'jl. kudus jepara, papringan 7/4 kaliwungu kudus', 'UNS'),
(10, '13', 'Elsa Diah Ayu', '2147483647', '2147483647', '', '', 'Karanganyar', 'UNS'),
(11, '14', 'Kartika', '6', '56', '', '', 'Cilacap', '5r'),
(17, '20', 'f', '6', '6', '', '', 'g', 'g'),
(18, '32', 'Peserta 6', '12345', '234567', 'Aceh', 'Kab. aceh barat', 'aceh barat', 'UNS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pitchd`
--

CREATE TABLE `tb_pitchd` (
  `id_pitchd` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `uraian_singkat` text NOT NULL,
  `file_pitchd` varchar(255) NOT NULL,
  `date_added` date NOT NULL,
  `date_updated` date NOT NULL,
  `finalisasi` int(11) NOT NULL,
  `date_finalisasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pitchd`
--

INSERT INTO `tb_pitchd` (`id_pitchd`, `id_user`, `id_proposal`, `uraian_singkat`, `file_pitchd`, `date_added`, `date_updated`, `finalisasi`, `date_finalisasi`) VALUES
(6, 12, 22, '<p>fbdhb</p>', '1__COVER.pdf', '2021-08-19', '0000-00-00', 1, '2021-08-21'),
(7, 14, 0, '<p>pd&nbsp;KARtik</p>', 'a3 310gr.pdf', '2021-08-21', '2021-08-21', 1, '2021-08-21'),
(8, 13, 27, '<p>thnn&nbsp;Zhong Chenle, known professionally by the mononym Chenle, is a Chinese singer, songwriter, and actor currently based in South Korea. Chenle started his career as a child singer, having performed in various concerts and television shows in China and abroad</p><p>thnn&nbsp;Zhong Chenle, known professionally by the mononym Chenle, is a Chinese singer, songwriter, and actor currently based in South Korea. Chenle started his career as a child singer, having performed in various concerts and television shows in China and abroad</p>', '3_2021_01_M3118046.pdf', '2021-08-25', '0000-00-00', 1, '2021-08-25'),
(12, 32, 28, '<p>tgh</p>', 'a3_310gr.pdf', '2021-08-26', '0000-00-00', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_plan`
--

CREATE TABLE `tb_plan` (
  `id_plan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `date_plan` date NOT NULL,
  `cust_plan` text NOT NULL,
  `value_plan` text NOT NULL,
  `channels_plan` text NOT NULL,
  `relation_plan` text NOT NULL,
  `key_act_plan` text NOT NULL,
  `key_res_plan` text NOT NULL,
  `key_partner_plan` text NOT NULL,
  `cost_plan` text NOT NULL,
  `revenue_plan` text NOT NULL,
  `date_added` date NOT NULL,
  `date_updated` date NOT NULL,
  `finalisasi` int(11) NOT NULL,
  `date_finalisasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_plan`
--

INSERT INTO `tb_plan` (`id_plan`, `id_user`, `id_proposal`, `date_plan`, `cust_plan`, `value_plan`, `channels_plan`, `relation_plan`, `key_act_plan`, `key_res_plan`, `key_partner_plan`, `cost_plan`, `revenue_plan`, `date_added`, `date_updated`, `finalisasi`, `date_finalisasi`) VALUES
(2, 0, 0, '0000-00-00', '1acustLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2bLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis ', '3cdLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '4dfLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '5fgLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '6ghLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '7hjLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '8ikLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '9jmLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00', '0000-00-00', 0, '0000-00-00'),
(8, 12, 22, '0000-00-00', '<p>customer plan</p>', '<p>value plan</p>', '<p>channels plan</p>', '<p>relationship plan</p>', '<p>key act plan</p>', '<p>key res plan</p>', '<p>key part plan</p>', '<p>cost plan</p>\r\n', '<p>revenue plan</p>', '2021-08-19', '2021-08-19', 1, '2021-08-21'),
(9, 14, 0, '0000-00-00', '<p>cust&nbsp;KARTIK</p>', '<p>value&nbsp;KARTIK</p>', '<p>channels&nbsp;KARTIKA</p>', '<p>relation&nbsp;KARTIKA</p>', '<p>keyact&nbsp;KARTIKA</p>', '<p>keyres&nbsp;KARTIKA</p>', '<p>keypart&nbsp;KARTIKA</p>', '<p>cost&nbsp;KARTIKA</p>\r\n', '<p>revenue&nbsp;KARTIKA</p>', '2021-08-21', '2021-08-21', 1, '2021-08-21'),
(10, 13, 27, '0000-00-00', '<p>bgr</p>', '<p>hytg</p>', '<p>nyttyn</p>', '<p>nytg</p>', '<p>nhtyg</p>', '<p>ynt</p>', '<p>yngtb</p>', '<p>ythty</p>\r\n', '<p>hyyhth</p>', '2021-08-25', '2021-08-25', 1, '2021-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_proposal`
--

CREATE TABLE `tb_proposal` (
  `id_proposal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_judul` int(11) NOT NULL,
  `id_su` int(11) NOT NULL,
  `id_bt` int(11) NOT NULL,
  `id_solusi` int(11) NOT NULL,
  `id_pp` int(11) NOT NULL,
  `id_plan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_proposal`
--

INSERT INTO `tb_proposal` (`id_proposal`, `id_user`, `id_judul`, `id_su`, `id_bt`, `id_solusi`, `id_pp`, `id_plan`) VALUES
(1, 13, 26, 0, 0, 0, 0, 0),
(2, 13, 27, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_prov` int(11) NOT NULL,
  `prov` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_prov`, `prov`) VALUES
(1, 'Aceh'),
(3, 'Sumatera utara'),
(4, 'Sumatera barat'),
(5, 'Riau'),
(6, 'Kepulauan riau'),
(7, 'Jambi'),
(8, 'Bengkulu'),
(9, 'Sumatera selatan'),
(10, 'Kepulauan bangka belitung'),
(11, 'Lampung'),
(12, 'DKI jakarta'),
(13, 'Banten'),
(14, 'Jawa barat'),
(15, 'Jawa tengah'),
(16, 'Jawa timur'),
(17, 'DI Yogyakarta'),
(18, 'Bali'),
(19, 'Nusa tenggara barat'),
(20, 'Nusa tenggara timur'),
(21, 'Kalimantan barat'),
(22, 'Kalimantan tengah'),
(23, 'Kalimantan selatan'),
(24, 'Kalimantan timur'),
(25, 'Kalimantan utara'),
(26, 'Sulawesi utara'),
(27, 'Gorontalo'),
(28, 'Sulawesi tengah'),
(29, 'Sulawesi barat'),
(30, 'Sulawesi selatan'),
(31, 'Sulawesi tenggara'),
(32, 'Maluku utara'),
(33, 'Maluku'),
(34, 'Papua barat'),
(35, 'Papua');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekening`
--

CREATE TABLE `tb_rekening` (
  `id_rek` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `nama_rek` varchar(150) NOT NULL,
  `no_rek` text NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rekening`
--

INSERT INTO `tb_rekening` (`id_rek`, `nama_bank`, `nama_rek`, `no_rek`, `added_by`) VALUES
(1, 'BCA', 'Kayla Shareta Andien', '12345678', 'panitia@gmail.com'),
(2, 'BRI', 'Kartika Dewi Larasati', '987654321', 'panitia@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `id_solusi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nama_solusi` varchar(255) NOT NULL,
  `deskripsi_solusi` text NOT NULL,
  `logo_solusi` text NOT NULL,
  `prev_ui1_solusi` text NOT NULL,
  `prev_ui2_solusi` text NOT NULL,
  `prev_ui3_solusi` text NOT NULL,
  `prev_ui4_solusi` text NOT NULL,
  `tahun_buat_solusi` int(11) NOT NULL,
  `link_vid_solusi` text NOT NULL,
  `link_prod_solusi` text NOT NULL,
  `teknologi_solusi` text NOT NULL,
  `date_added` date NOT NULL,
  `date_updated` date NOT NULL,
  `finalisasi` int(11) NOT NULL,
  `date_finalisasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`id_solusi`, `id_user`, `id_proposal`, `nama_solusi`, `deskripsi_solusi`, `logo_solusi`, `prev_ui1_solusi`, `prev_ui2_solusi`, `prev_ui3_solusi`, `prev_ui4_solusi`, `tahun_buat_solusi`, `link_vid_solusi`, `link_prod_solusi`, `teknologi_solusi`, `date_added`, `date_updated`, `finalisasi`, `date_finalisasi`) VALUES
(1, 0, 0, 'TREASURE LANDDD', 'deskripsiLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'EtgVdX7VIAUM6Ia.jpg', 'EtgVdKyVoAAq27-.jpg', 'EvezMAkVEAUWE2e1.jpg', 'EukxPmxVgAYQ8sF_(1).jpg', 'EtgViH0VcAESvbs1.jpg', 2020, 'link vidLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'link prodLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'teknologiLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00', '0000-00-00', 0, '0000-00-00'),
(7, 12, 22, 'NYAM NYAM NYAM NYAM', '<p>deskripsi aplikasi ni solusi</p>\r\n', 'WhatsApp_Image_2021-07-31_at_12_13_10_PM.jpeg', '', '', '', '', 2021, 'youtube.com solusi', 'google.com solusi', '<p>teknologi&nbsp;solusi</p>\r\n', '2021-08-18', '2021-08-19', 1, '2021-08-21'),
(8, 14, 0, 'APLIKASI KARTIKAA', '<p>deskripsi&nbsp;KARTIKA</p>\r\n', 'WhatsApp_Image_2021-07-31_at_12_37_30_AM.jpeg', '', '', '', '', 2045, 'link KARTIKA', 'prod link KARTIKA', '<p>teknologi&nbsp;KARTIKA</p>\r\n', '2021-08-21', '2021-08-21', 1, '2021-08-21'),
(10, 13, 27, 'GTF', '<p>gttgadalah bagian tabel yang mendatar. Pada contoh gambar di atas, tabel tersebut terdiri dari 5 baris. Kolom adalah bagian tabel yang vertikal (atas ke bawah). Pada contoh gambar di atas, tabel tersebut terdiri dari 6 kolom. Sel adalah kotak-kotak yang ada pada tabel. Pada gambar di atas, tabel tersebut memiliki 30 sel. Border adalah garis yang membentuk t</p><p>gttgadalah bagian tabel yang mendatar. Pada contoh gambar di atas, tabel tersebut terdiri dari 5 baris. Kolom adalah bagian tabel yang vertikal (atas ke bawah). Pada contoh gambar di atas, tabel tersebut terdiri dari 6 kolom. Sel adalah kotak-kotak yang ada pada tabel. Pada gambar di atas, tabel tersebut memiliki 30 sel. Border adalah garis yang membentuk t</p>\r\n', 'WhatsApp_Image_2021-07-31_at_12_12_46_PM.jpeg', 'Certificate_(1).jpg', 'WhatsApp_Image_2021-07-31_at_12_36_38_AM_(1).jpeg', 'WhatsApp_Image_2021-07-31_at_12_03_20_PM.jpeg', 'struktur-organisasi-1-771x1024.jpg', 2020, 'www.youtube.com', 'link produk', '<p>rfefr</p>\r\n', '2021-08-25', '0000-00-00', 1, '2021-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_start_up`
--

CREATE TABLE `tb_start_up` (
  `id_su` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nama_su` text NOT NULL,
  `visi_su` text NOT NULL,
  `misi_su` text NOT NULL,
  `struktur_su` text NOT NULL,
  `logo_su` text NOT NULL,
  `tagline_su` text NOT NULL,
  `date_added` date NOT NULL,
  `date_updated` date NOT NULL,
  `finalisasi` int(11) NOT NULL,
  `date_finalisasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_start_up`
--

INSERT INTO `tb_start_up` (`id_su`, `id_user`, `id_proposal`, `nama_su`, `visi_su`, `misi_su`, `struktur_su`, `logo_su`, `tagline_su`, `date_added`, `date_updated`, `finalisasi`, `date_finalisasi`) VALUES
(40, '12', 22, 'KKK', '<p>gtt</p>\r\n', '<p>rggr</p>\r\n', '', '', 'GGGGGGG', '0000-00-00', '2021-08-25', 1, '2021-08-21'),
(41, '14', 0, 'KKK', '<p>gtt</p>\r\n', '<p>rggr</p>\r\n', '', '', 'GGGGGGG', '2021-08-21', '2021-08-25', 1, '2021-08-21'),
(42, '13', 27, 'KKK', '<p>gtt</p>\r\n', '<p>rggr</p>\r\n', 'Certificate.jpg', 'Certificate_(1).jpg', 'GGGGGGG', '2021-08-25', '0000-00-00', 1, '2021-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tema`
--

CREATE TABLE `tb_tema` (
  `id_tema` int(11) NOT NULL,
  `kode_tema` varchar(25) NOT NULL,
  `tema_proposal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tema`
--

INSERT INTO `tb_tema` (`id_tema`, `kode_tema`, `tema_proposal`) VALUES
(1, 'IOT', 'Internet of Things'),
(2, 'GAME', 'Games'),
(3, 'AR', 'Augmented Reality'),
(4, 'VR', 'Virtual Reality'),
(5, 'SC', 'Security'),
(6, 'AND', 'Android'),
(7, 'SI', 'Sistem Informasi'),
(9, 'AI', 'Artifical Intelegence');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `uname_user` varchar(255) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `aktif` int(10) NOT NULL,
  `date_user` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `uname_user`, `pass_user`, `hak_akses`, `aktif`, `date_user`) VALUES
(12, 'kayla@gmail.com', '$2y$10$haNvCyTLUhscw5sRBjHvwuRcxdGTG83mip1tpN4cQFFvINAWJY6.6', 4, 1, '2021-08-08'),
(13, 'elsa@gmail.com', '$2y$10$lRyLEEIriV44O9Svfjds2.w8ttdbf51NmT5bFGxlQ8k3RkWlLN3Nu', 4, 1, '2021-08-08'),
(14, 'kartika@gmail.com', '$2y$10$S8PkWi/J7yUq2.ZJTkdP6ev7IqFLGl/uPzDarPWdz69jBzHIODoGK', 4, 1, '2021-08-08'),
(15, 'admin@gmail.com', '$2y$10$ndQw4sVg3wvFEQaCMxKihuxorPrPGAQiFBe178iFpXkKrCcqB3GTq', 1, 1, '2021-08-08'),
(16, 'panitia@gmail.com', '$2y$10$BjYWHPCWNXo0kftIrmaI1eGRhFIfXzp3FE4XRa35tfCGa6TqqShUO', 2, 1, '2021-08-08'),
(17, 'juri@gmail.com', '$2y$10$Ty2yRep8RPwXBrNwMG2PKuNFiRwb4YQO9eq4nJn4Mj2sra7C44IZK', 3, 1, '2021-08-08'),
(20, 'kayl0@gmail.com', '$2y$10$BPupRQPrNDVAUlXeffjlwO4Ogs0YpmNQhn7t3VTTtdmYK9qpU/ixi', 4, 1, '2021-08-08'),
(21, 'admin2@gmail.com', '$2y$10$17pMC3JEhKPTBTRql9wxuuSMtTAFQxfKyCcKmmH0ktlG4Hp5Q7eQu', 1, 1, '2021-08-10'),
(22, 'admin3@gmail.com', '$2y$10$JHe7f/CNP80a.WJBeUFZiOmiw4DaBL2CfH9hL4CsCShv5jbt8XyTC', 1, 1, '2021-08-10'),
(23, 'admin4@gmail.com', '$2y$10$awwy1CgjO.xID422HPjaeu0603mjdDPFHyEZWgPWm2lqcHwqrtihO', 1, 1, '2021-08-10'),
(25, 'admin5@gmail.com', '$2y$10$ekimakbM/oMA5NVmzo4BUuwWVIbYcKk00yQ3STkMs7.Vx4M/EkPb6', 1, 1, '2021-08-10'),
(30, 'panitia2@gmail.com', '$2y$10$dwVrj6iWcz4QAG4AnAcXmuvXTT4yUe.T4bJqwctkMKgFy/C0Y76XO', 2, 1, '2021-08-10'),
(31, 'juri2@gmail.com', '$2y$10$yDbjHZNvv26Wq7SFSWF7A.Jlq3qaALYddOeTTW8bGwxSrPNotyNue', 3, 1, '2021-08-10'),
(32, 'peserta@gmail.com', '$2y$10$vYeHwP0xpTFocLkmDHSSk.hv/Jkokm/EjIIdNZsiulJqx6u9m0pqi', 4, 1, '2021-08-14'),
(33, 'panitia3@gmail.com', '$2y$10$ATOQ3x7piTPESQlxkI5bceTaysmd0Wc1Uu6jWpQSVQ7vKjZyiZiGS', 2, 1, '2021-08-14'),
(34, 'panitia4@gmail.com', '$2y$10$ClHsZNlKeJH.T.b4TSvQoehxyg/ds2ZHANhZkQXAgf1o5aNRGFXW2', 2, 1, '2021-08-14'),
(35, 'panitia5@gmail.com', '$2y$10$s7moFiMLn/N5qZPFr4IAt.gLPxhedCuzDzaYZ84UKwr4JctMiLSn2', 2, 1, '2021-08-14'),
(36, 'juri3@gmail.com', '$2y$10$ZZTHpRUIYbrnYZKxMarK4.VLJ.O6u5hZMRjZKfmbYxusbA.wzmpPq', 3, 1, '2021-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_verif`
--

CREATE TABLE `tb_verif` (
  `id_verif` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `verif1_daftar` varchar(50) DEFAULT NULL,
  `date_verif1daftar` date DEFAULT NULL,
  `nama_verif1daftar` varchar(255) DEFAULT NULL,
  `verif2_panitia` varchar(50) DEFAULT NULL,
  `date_verif2panitia` date DEFAULT NULL,
  `nama_verif2panitia` varchar(255) DEFAULT NULL,
  `verif3_selesai` varchar(50) DEFAULT NULL,
  `date_verif3selesai` date DEFAULT NULL,
  `nama_verif3selesai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_hak`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_biodatatim`
--
ALTER TABLE `tb_biodatatim`
  ADD PRIMARY KEY (`id_bt`);

--
-- Indexes for table `tb_juri`
--
ALTER TABLE `tb_juri`
  ADD PRIMARY KEY (`id_juri`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kec`),
  ADD UNIQUE KEY `id_kota` (`id_kota`);

--
-- Indexes for table `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_prov_2` (`id_prov`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_master_proposal`
--
ALTER TABLE `tb_master_proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `tb_panitia`
--
ALTER TABLE `tb_panitia`
  ADD PRIMARY KEY (`id_panitia`);

--
-- Indexes for table `tb_paper_pitching`
--
ALTER TABLE `tb_paper_pitching`
  ADD PRIMARY KEY (`id_pp`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_daftar`),
  ADD UNIQUE KEY `nim_mhs` (`id_user`);

--
-- Indexes for table `tb_pitchd`
--
ALTER TABLE `tb_pitchd`
  ADD PRIMARY KEY (`id_pitchd`);

--
-- Indexes for table `tb_plan`
--
ALTER TABLE `tb_plan`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indexes for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  ADD PRIMARY KEY (`id_rek`);

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indexes for table `tb_start_up`
--
ALTER TABLE `tb_start_up`
  ADD PRIMARY KEY (`id_su`);

--
-- Indexes for table `tb_tema`
--
ALTER TABLE `tb_tema`
  ADD PRIMARY KEY (`id_tema`),
  ADD UNIQUE KEY `tema_proposal` (`tema_proposal`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `uname_user` (`uname_user`);

--
-- Indexes for table `tb_verif`
--
ALTER TABLE `tb_verif`
  ADD PRIMARY KEY (`id_verif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_hak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_biodatatim`
--
ALTER TABLE `tb_biodatatim`
  MODIFY `id_bt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_juri`
--
ALTER TABLE `tb_juri`
  MODIFY `id_juri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kec` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kota`
--
ALTER TABLE `tb_kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_master_proposal`
--
ALTER TABLE `tb_master_proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_panitia`
--
ALTER TABLE `tb_panitia`
  MODIFY `id_panitia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_paper_pitching`
--
ALTER TABLE `tb_paper_pitching`
  MODIFY `id_pp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_pitchd`
--
ALTER TABLE `tb_pitchd`
  MODIFY `id_pitchd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_plan`
--
ALTER TABLE `tb_plan`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  MODIFY `id_rek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  MODIFY `id_solusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_start_up`
--
ALTER TABLE `tb_start_up`
  MODIFY `id_su` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_tema`
--
ALTER TABLE `tb_tema`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_verif`
--
ALTER TABLE `tb_verif`
  MODIFY `id_verif` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD CONSTRAINT `tb_kecamatan_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `tb_kota` (`id_kota`);

--
-- Constraints for table `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD CONSTRAINT `tb_kota_ibfk_1` FOREIGN KEY (`id_prov`) REFERENCES `tb_provinsi` (`id_prov`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
