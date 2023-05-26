<?php

$id_produk =$_POST['id_produk'];
$gambar =$_POST['gambar'];
$nama_produk =$_POST['nama_produk'];
$harga =$_POST['harga'];
$stok =$_POST['stok'];
$jenis_produk =$_POST['jenis_produk'];
$id_kategori =$_POST['id_kategori'];

include('connect.php');

$result = mysqli_query($conn, "INSERT INTO `jajan_pasar` (`id_produk`,`gambar`, `nama_produk`, `harga`, `stok`, `jenis_produk`, `id_kategori` ) VALUES  ('$id_produk','$gambar', '$nama_produk', '$harga', '$stok', '$jenis_produk', '$id_kategori'); ");

header("Location:produk_1.php");

?>