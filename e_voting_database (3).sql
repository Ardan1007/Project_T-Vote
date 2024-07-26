-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 02 Bulan Mei 2024 pada 08.18
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_voting_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int NOT NULL,
  `nama_kandidat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_kandidat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama_kandidat`, `foto_kandidat`) VALUES
(1, 'Gibran', ''),
(3, 'Mahfud', ''),
(4, 'Muhaimin', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat_event`
--

CREATE TABLE `kandidat_event` (
  `id` int NOT NULL,
  `id_kategori_event_vote` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_kandidat` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `visi_misi` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kandidat_event`
--

INSERT INTO `kandidat_event` (`id`, `id_kategori_event_vote`, `nama`, `foto_kandidat`, `visi_misi`) VALUES
(1, 2, 'Ratu Annisa', 'foto_1714585918.png', 'Tidak ada'),
(2, 2, 'Putri Dahlia', 'foto_1714584661.png', 'Tidak Ada'),
(3, 2, 'Putri Dahlia', 'foto_1714584668.png', 'Tidak Ada'),
(5, 3, 'Muhaimin', 'foto_1714604125.jpg', 'Tidak Ada'),
(6, 3, 'Gibran', 'foto_1714604146.jpg', 'Tidak Ada'),
(7, 3, 'Mahfud', 'foto_1714604198.jpg', 'Tidak Ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_event_vote`
--

CREATE TABLE `kategori_event_vote` (
  `id` int NOT NULL,
  `nama_event` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_event_vote`
--

INSERT INTO `kategori_event_vote` (`id`, `nama_event`, `deskripsi`, `created_date`) VALUES
(2, 'Putri Indonesia', 'Event ini adalah', '0000-00-00 00:00:00'),
(3, 'Pemilu 2024', 'Pemilu diselenggarakan untuk memilih pemimpin negara ditahun 2024', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_validasi` tinyint(1) DEFAULT '0',
  `jumlah_token` int DEFAULT NULL,
  `nominal_uang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `bukti_pembayaran`, `status_validasi`, `jumlah_token`, `nominal_uang`) VALUES
(4, 6, 'dvsvdvsdvsdvsdv.png', 1, 5, 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `userv`
--

CREATE TABLE `userv` (
  `id_user` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `token` int DEFAULT '0',
  `email` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pertanyaan` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `jawaban` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `userv`
--

INSERT INTO `userv` (`id_user`, `username`, `password`, `token`, `email`, `nama`, `no_hp`, `tgl_lahir`, `pertanyaan`, `jawaban`) VALUES
(1, 'Alfian Alam', 'alam123', 0, '', '', '', NULL, 'nama makanan terenak', 'keong'),
(2, 'Febryansyah', 'feb123', 0, '', '', '', NULL, 'nama makanan terenak', 'keong'),
(3, 'Jaihan Abidin', 'je123', 0, '', '', '', NULL, 'nama makanan terenak', 'keong'),
(4, 'zxczxc', 'zxczxc', 0, '', '', '', NULL, 'nama makanan terenak', 'keong'),
(6, 'bambang', 'bambang', 31, 'bambang@gooooool.com', 'bambang', '08345356564535', '2024-04-28', 'Siapa nama ibu kandung', 'bambang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `id_admin` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'Jeabede', 'Jeabede');

-- --------------------------------------------------------

--
-- Struktur dari tabel `voting`
--

CREATE TABLE `voting` (
  `id_voting` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `id_kandidat` int DEFAULT NULL,
  `id_kategori_event_vote` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `voting`
--

INSERT INTO `voting` (`id_voting`, `id_user`, `id_kandidat`, `id_kategori_event_vote`) VALUES
(34, 6, 1, 2),
(35, 6, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indeks untuk tabel `kandidat_event`
--
ALTER TABLE `kandidat_event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_event_vote`
--
ALTER TABLE `kategori_event_vote`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `userv`
--
ALTER TABLE `userv`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`id_voting`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kandidat` (`id_kandidat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kandidat_event`
--
ALTER TABLE `kandidat_event`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori_event_vote`
--
ALTER TABLE `kategori_event_vote`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `userv`
--
ALTER TABLE `userv`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `voting`
--
ALTER TABLE `voting`
  MODIFY `id_voting` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `userv` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `voting`
--
ALTER TABLE `voting`
  ADD CONSTRAINT `voting_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `userv` (`id_user`),
  ADD CONSTRAINT `voting_ibfk_2` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat` (`id_kandidat`),
  ADD CONSTRAINT `voting_ibfk_new` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat_event` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
