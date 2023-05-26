<?php
include('connect.php');

$id_produk = $_GET["id_produk"];
$gambar = $_POST["gambar"];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$jenis_produk = $_POST['jenis_produk'];
$id_kategori = $_POST["id_kategori"];

$result = mysqli_query($conn, "UPDATE `jajan_pasar` SET id_produk='$id_produk', gambar='$gambar', nama_produk='$nama_produk', harga='$harga', stok='$stok', jenis_produk='$jenis_produk' , id_kategori='$id_kategori' WHERE id_produk='$id_produk';");

header("Location:produk_1.php");
?>

