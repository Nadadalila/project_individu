<?php

$id_pemesanan =$_POST['id_pemesanan'];
$id_pelanggan =$_POST['id_pelanggan'];
$nama_pelanggan =$_POST['nama_pelanggan'];
$no_telepon =$_POST['no_telepon'];
$nama_produk =$_POST['nama_produk'];
$jumlah_produk =$_POST['jumlah_produk'];
$alamat =$_POST['alamat'];

include('connect.php');

$result = mysqli_query($conn, "INSERT INTO `pemesanan` (`id_pemesanan`,`id_pelanggan`, `nama_pelanggan`, `no_telepon`, `nama_produk`, `jumlah_produk`, `alamat` ) VALUES  ('$id_pemesanan','$id_pelanggan', '$nama_pelanggan', '$no_telepon', '$nama_produk', '$jumlah_produk', '$alamat'); ");

header("Location:daftar_order.php");

?>