-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 01 Feb 2020 pada 09.14
-- Versi server: 5.7.26
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `arkademy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Cashier`
--

CREATE TABLE `Cashier` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Cashier`
--

INSERT INTO `Cashier` (`id`, `name`) VALUES
(1, 'Pevita Pearce'),
(2, 'Raisa Andriana'),
(3, 'Muhammad Bagas Fadillah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Category`
--

CREATE TABLE `Category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Category`
--

INSERT INTO `Category` (`id`, `name`) VALUES
(1, 'Food'),
(2, 'Drink');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Product`
--

CREATE TABLE `Product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_cashier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Product`
--

INSERT INTO `Product` (`id`, `name`, `price`, `id_category`, `id_cashier`) VALUES
(1, 'Latte', 10000, 2, 1),
(2, 'Cake', 20000, 1, 2),
(3, 'Tempe Bacem', 5000, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Cashier`
--
ALTER TABLE `Cashier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `Cashier`
--
ALTER TABLE `Cashier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
