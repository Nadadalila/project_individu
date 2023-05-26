<?php

	$id_pemesanan = $_GET['id_pemesanan'];

	include('connect.php');

	$query = mysqli_query($conn, "DELETE FROM pemesanan WHERE id_pemesanan = '$id_pemesanan' ");

	header("Location: daftar_order.php");

?>