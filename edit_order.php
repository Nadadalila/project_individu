<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT ORDER PAWON NDESO</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="css/style.css">

    <style>
        .edit_order{
            font-size: 15px;
        }
    </style>

   
</head>

<?php
include('connect.php');

$id_pemesanan = $_GET['id_pemesanan'];

$data_pemesanan = mysqli_query($conn, "SELECT * FROM pemesanan WHERE id_pemesanan = '$id_pemesanan'");

while($pemesanan = mysqli_fetch_array($data_pemesanan)){
    $id_pemesanan = $pemesanan ['id_pemesanan'];
    $id_pelanggan = $pemesanan['id_pelanggan'] ;
    $nama_pelanggan = $pemesanan ['nama_pelanggan'];
    $no_telepon = $pemesanan ['no_telepon'];
    $nama_produk = $pemesanan ['nama_produk'];
    $jumlah_produk = $pemesanan ['jumlah_produk'];
    $alamat = $pemesanan ['alamat'];
    
}
?>

<body>
    <!-- header -->

    <header class="header">

        <a href="index.html" class="logo"> <i class="fas fa-bread-slice"></i> PAWON NDESO </a>

        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="about.html">about</a>
            <a href="produk.php">product</a>
            <a href="catalog.html">catalog</a>
            <a href="tim.html">team</a>
            <a href="order.html">order</a>
        </nav>

        <div class="icons">
            <div id="cart-btn" class="fas fa-shopping-cart"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </header>

    <!-- header end -->

     <!-- shopping cart -->

     <div class="cart-items-container">

        <div id="close-form" class="fas fa-times"></div>
        <h3 class="title">KeranjangQu</h3>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/img-1.jpg" alt="">
            <div class="content">
                <h3>Kue Putu Bambu</h3>
                <div class="price">Rp.25000-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/img-2.jpeg" alt="">
            <div class="content">
                <h3>Lumpia Semarang</h3>
                <div class="price">Rp.45000-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/img-3.jpg" alt="">
            <div class="content">
                <h3>Kue Pukis</h3>
                <div class="price">Rp.20000-</div>
            </div>
        </div>

        <a href="#" class="btn"> checkout </a>

    </div>

    <!-- shopping cart end-->

    <!-- product -->

    <br><br><br><br><br><section class="edit_order" id="edit_order">

        <h1 class="heading">Tambahkan<span> Produk</span></h1>

        <div class="box-container">
        <form action="edit_order_1.php? id_pemesanan=<?php echo $id_pemesanan?>" method="post">
        <table cellpadding ="10" cellspacing="0" class= "table table-striped">
            <tr>
                <td>ID Pemesanan</td>
                <td><input id="input_ID_pemesanan" type="text" name="id_pemesanan" value="<?php echo $id_pemesanan?>"> </td>
            </tr>
            <tr>
                <td>ID Pelanggan</td>
                <td><input id="input_ID_pelanggan" type="text" name="id_pelanggan" value="<?php echo $id_pelanggan?>"></td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td><input id="input_nama_pelanggan"  type="text" name="nama_pelanggan" value="<?php echo $nama_pelanggan?>"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input id="input_telepon" type="text" name="no_telepon" value="<?php echo $no_telepon?>"></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input id="input_nama_produk" type="text" name="nama_produk" value="<?php echo $nama_produk?>"></td>
            </tr>
            <tr>
                <td>Jumlah Produk</td>
                <td><input id="input_jumlah_produk" type="text" name="jumlah_produk" value="<?php echo $jumlah_produk?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input id="input_alamat" type="text" name="alamat" value="<?php echo $alamat?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="Submit" name="Submit" class="btn btn-primary"  value="edit"></td>
            </tr>
        </table>
        </form>
        </div>

    <script>
        $(document).ready( function () {
        $('#example').DataTable();
        } );
    </script>


    </section>


    <!-- product end-->

     <!-- footer -->

     <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>address</h3>
                <p>Kampung Nulis, No. 130 RT/03, Tamantirto, Kasihan, Bantul, Yogyakarta.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>E-mail</h3>
                <a href="#" class="link">fidhinafinadalilaaa@gmail.com</a>
            </div>

            <div class="box">
                <h3>call us</h3>
                <p>+62 89501078014</p>
            </div>

            <div class="box">
                <h3> opening hours</h3>
                <p>senin - sabtu: 9:00 - 23:00 <br> minggu: 8:00 - 24:00 </p>
            </div>

        </div>

        <div class="credit">created by <span>naddalila</span> all rights reserved! </div>

    </section>

    <!-- footer ends -->



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <script src="js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>


    
</body>
</html>