<?php

	$id_produk = $_GET['id_produk'];

	include('connect.php');

	$query = mysqli_query($conn, "DELETE FROM jajan_pasar WHERE id_produk = '$id_produk' ");

	header("Location:produk_1.php");

?>