<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EDIT PRODUK PAWON NDESO</title>

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
        .edit{
            font-size: 15px;
        }
    </style>

   
</head>

<?php
include('connect.php');

$id_produk = $_GET['id_produk'];

$data_produk = mysqli_query($conn, "SELECT * FROM jajan_pasar WHERE id_produk = '$id_produk'");

while($jajan_pasar = mysqli_fetch_array($data_produk)){
    $id_produk = $jajan_pasar ['id_produk'];
    $gambar = $jajan_pasar['gambar'] ;
    $nama_produk = $jajan_pasar ['nama_produk'];
    $harga = $jajan_pasar ['harga'];
    $stok = $jajan_pasar ['stok'];
    $jenis_produk = $jajan_pasar ['jenis_produk'];
    $id_kategori = $jajan_pasar ['id_kategori'];
    
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

    <br><br><br><br><br><section class="edit" id="edit">

        <h1 class="heading">Tambahkan<span> Produk</span></h1>

        <div class="box-container">
        <form action="proses_edit.php? id_produk=<?php echo $id_produk?>" method="post">
        <table cellpadding ="10" cellspacing="0" class= "table table-striped">
            <tr>
                <td>ID Produk</td>
                <td><input id="input_ID" type="text" name="id_produk" value="<?php echo $id_produk?>"> </td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input id="input_gambar" type="file" name="gambar" value="images/<?php echo $gambar?>"></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input id="input_nama"  type="text" name="nama_produk" value="<?php echo $nama_produk?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input id="input_harga" type="text" name="harga" value="<?php echo $harga?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input id="input_stok" type="text" name="stok" value="<?php echo $stok?>"></td>
            </tr>
            <tr>
                <td>Jenis Produk</td>
                <td><input id="input_jenis_produk" type="text" name="jenis_produk" value="<?php echo $jenis_produk?>"></td>
            </tr>
            <tr>
                <td>ID Kategori</td>
                <td><input id="input_id_kategori" type="text" name="id_kategori" value="<?php echo $id_kategori?>"></td>
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