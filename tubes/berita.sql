-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220608.c947f28e00
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2022 pada 11.25
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `banner` varchar(300) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `judul` varchar(300) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `banner`, `tanggal`, `judul`, `deskripsi`) VALUES
(1, 'test.jpg', 'banner2.jpg', '2022-06-01 06:18:08', 'MITOS: Vaksin Dapat Membuat Saya Sakit COVID-19, Faktanya', 'MITOS: vaksin dapat membuat saya sakit COVID-19, faktanya vaksin COVID-19 mengajarkan sistem kekebalan tubuh bagaimana mengenali dan melawan virus penyebab COVID-19.  Terkadang proses ini bisa menimbulkan gejala, seperti demam. Gejala ini normal dan merupakan tanda bahwa tubuh sedang membangun perlindungan terhadap virus penyebab COVID-19.  Vaksin COVID-19 memberikan perlindungan bagi kita dan orang-orang di sekitar kita.  Ayo segera divaksin jika sudah dapat kesempatan!  Berbagai informasi mengenai COVID-19 tersedia di https://covid19.go.id dan https://s.id/infovaksin  #PakaiMasker #CepatVaksin'),
(3, 'mentri.jpg', 'bannernews.jpg', '2022-06-03 05:36:05', 'Percepat Pemenuhan Tenaga Kesehatan, Kemenkes Buka Program Bantuan Pendidikan Untuk Dokter Spesialis dan Dokter Gigi Spesialis', 'Menteri Kesehatan Budi Gunadi Sadikin mengungkapkan bahwa pemerataan tenaga kesehatan di seluruh fasyankes di Indonesia masih menjadi pekerjaan rumah pemerintah yang mendesak untuk segera ditangani.  Pasalnya, ketersediaan tenaga kesehatan spesialis di fasyankes di seluruh Indonesia terutama untuk penyakit-penyakit kronis saat ini masih sangat kurang. Disamping jumlahnya yang kurang, tenaga kesehatan juga banyak yang terkonsentrasi di kota-kota besar.  “Penyakit yang paling besar dampak nyawa dan biaya bagi masyarakat Indonesia adalah jantung, masih banyak provinsi yang tidak bisa memberikan layanan jantung di provinsi tersebut. Akibatnya kalau butuh intervensi harus diterbangkan ke daerah lain,” kata Menkes.  Berangkat dari persoalan ini, Menkes menargetkan seluruh fasyankes di tingkat provinsi bisa memberikan layanan kesehatan jantung di tahun 2024 mendatang. Namun demikian, target ini dihadapkan pada waktu yang bertahun-tahun karena lamanya proses pendidikan dokter.  Menkes menjelaskan berdasarkan data WHO, rasio dokter untuk warga negara Indonesia adalah 1:1000 dokter. Sementara di negara maju rasionya 3:1000, ada juga yang 5:1000.  Saat ini jumlah dokter yang tersedia di Indonesia sekitar 270 ribu, sementara tenaga kesehatan yang memiliki STR dan praktik banyak 140 ribu. Artinya masih ada kekurangan tenaga kesehatan sebanyak 130 ribu.  “Dokternya produksi setahunnya hanya 12 ribu, dibutuhkan setidaknya 10 tahun bahkan lebih untuk mengejar ketertinggalan jumlah dokter minimal sesuai standar WHO untuk melayani 270 juta masyarakat Indonesia,” ungkap Menkes.  Sebagai salah satu strategi mempercepat pendayagunaan jumlah tenaga kesehatan, Kementerian Kesehatan bekerjasama dengan Kementerian Keuangan akan memberikan kesempatan bagi para dokter maupun dokter gigi yang ingin berkontribusi bagi pembangunan kesehatan di Tanah Air dengan membuka Program Bantuan Pendidikan (PBP).  Hal ini sejalan dengan Surat Edaran Nomor HK. 02.02/I/1050/2022 tentang Rekrutmen Program Bantuan Pendidikan Dokter Spesialis – Dokter Gigi Spesialis Angkatan XXIX dan Dokter Subspesialis Angkatan XI Kemenkes RI Tahun 2022.  Menteri menyebutkan bantuan pendidikan ini merupakan bagian dari implementasi transformasi sistem kesehatan pilar kelima yakni transformasi Sumber Daya Manusia Kesehatan. Harapannya, adanya bantuan pendidikan ini dapat mempercepat pemenuhan jumlah tenaga kesehatan yang tersebar di seluruh pelosok Tanah Air.  “PBP merupakan bantuan yang disiapkan pemerintah dalam rangka penyiapan Program Pendidikan Dokter Spesialis-Subspesialis (PPDS) dan Dokter Gigi Spesialis (PPDGS) sebagai bentuk dukungan pelaksanaan transformasi SDM kesehatan untuk tercapainya pemenuhan dan pemerataan SDM Kesehatan,” katanya.  Bantuan pendidikan PPDS dan PPDGS menjangkau ASN dan Non-ASN dengan latar belakang pendidikan di Fakultas Kedokteran dan Fakultas Kedokteran Gigi yang bekerjasama dengan Kementerian Kesehatan boleh mendaftar.  Calon peserta bantuan pendidikan diutamakan kepada 7 program spesialis yang direkomendasikan oleh RS Pemerintah yang membutuhkan, terutama pada layanan penyakit prioritas dan berkomitmen untuk mendayagunakan setelah selesai pendidikan.  Adapun jenis kepesertaan lain yang diusulkan adalah calon peserta dari Dinas Kesehatan Provinsi, UPT Kementerian Kesehatan, Kementerian Pertahanan -TNI/Polri dan calon peserta pasca penugasan Nusantara Sehat.  Menkes meminta para tenaga kesehatan bisa memanfaatkan kesempatan ini dengan baik untuk melanjutkan ke jenjang pendidikan yang lebih tinggi.  Selain pemberian bantuan pendidikan ini, pada saat yang sama Kementerian Kesehatan juga bekerjasama dengan Kemendikbud-Dikti untuk Bantuan Biaya Pendidikan yang bisa didapatkan melalui program LPDP.  Pendaftaran beasiswa dibuka mulai 6-26 Juni 2022, yang dapat diakses melalui laman bandikdok.kemkes.go.id.  Mengenai syarat calon peserta dan alur pengusulan hingga proses penetapan Penerima Bantuan Pendidikan bisa dilihat di tautan berikut https://bit.ly/bandikdok-ebook  Tahapan seleksi dilakukan dari tanggal 27 Juni sampai 8 Juli 2022, dimana proses verifikasi awal akan dilakukan di tiap instansi pengusul yaitu Biro ODSM Kemenkes/Kemenhan-TNI/Polri dan Dinkes Provinsi. Dilanjutkan dengan verifikasi tingkat pusat yang dilakukan di Direktorat Jenderal Tenaga Kesehatan Kemenkes RI.  Bagi peserta yang lolos seleksi, langkah selanjutnya adalah penetapan penerima bantuan oleh Direktur Jenderal Tenaga Kesehatan Kemenkes RI. Setelah penetapan, mahasiswa bisa memulai perkuliahan sesuai masing-masing institusi.  Hotline Virus Corona 119 ext 9. Berita ini disiarkan oleh Biro Komunikasi dan Pelayanan Publik, Kementerian Kesehatan RI. Untuk informasi lebih lanjut dapat menghubungi nomor hotline Halo Kemenkes melalui nomor hotline 1500-567, SMS 081281562620, faksimili (021) 5223002, 52921669, dan alamat email kontak@kemkes.go.id (MF).  Kepala Biro Komunikasi dan Pelayanan Publik  drg. Widyawati, MKM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `notelp` int(11) NOT NULL,
  `jeniskelamin` varchar(300) NOT NULL,
  `alamat` text NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(47, 'jihan', '$2y$10$QewiOR3/Pe2hsJTqp4MSKOLUVrv6qLt5HnnMGE0X/OljGgcCUQsVi'),
(49, 'haya', '$2y$10$p.OQxPZHqLiW0cit2kDql.r7bvl8nGy9tZAhsEKH38TNOPQKZo/e6'),
(51, 'nisa', '$2y$10$dHxVd7SBupm1AyB9v1hmN.vk0CmY4NWEjpHVCOtGOlzaZUEP3cXb2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



