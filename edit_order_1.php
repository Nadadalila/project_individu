<?php
include('connect.php');

$id_pemesanan = $_GET["id_pemesanan"];
$id_pelanggan = $_POST["id_pelanggan"];
$nama_pelanggan = $_POST['nama_pelanggan'];
$no_telepon = $_POST['no_telepon'];
$nama_produk = $_POST['nama_produk'];
$jumlah_produk = $_POST['jumlah_produk'];
$alamat = $_POST["alamat"];

$result = mysqli_query($conn, "UPDATE `pemesanan` SET id_pemesanan='$id_pemesanan', id_pelanggan='$id_pelanggan', nama_pelanggan='$nama_pelanggan', no_telepon='$no_telepon', nama_produk='$nama_produk', jumlah_produk='$jumlah_produk' , alamat='$alamat' WHERE id_pemesanan='$id_pemesanan';");

header("Location:daftar_order.php");
?>
