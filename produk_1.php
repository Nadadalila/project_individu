<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR PAWON NDESO</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>


    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="css/style.css">

    <style>
        .product1{
            font-size: 15px;
        }
        .product1 .tambah_produk{
            padding-bottom : 40px;
        }
        .product1 .aksi{
            font-size:10px;
        }
    </style>
</head>
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

    <br><br><br><br><br><section class="product1" id="product1">

        <h1 class="heading">Aneka<span> Kuliner</span></h1>

        <div class="box-container">
            <div class="tambah_produk">
                <a href="create.php" class="btn">create</a>
            </div>

            <table cellpadding ="10" cellspacing="0" class= "table table-striped" id="example">
                <thead>
                    <tr>
                        <th width="50px" class="text-center">id_produk</th>
                        <th width="50px" class="text-center">gambar</th>
                        <th width="200px" class="text-center">nama_produk</th>
                        <th width="200px" class="text-center">harga</th>
                        <th width="200px" class="text-center">stok</th>
                        <th width="200px" class="text-center">jenis_produk</th>
                        <th width="200px" class="text-center">id_kategori</th>
                        <th width="200px" class="text-center">aksi</th>
                    </tr>
                </thead>

            <?php
            include('connect.php');

            $data_produk = mysqli_query($conn, "SELECT * FROM jajan_pasar");

            while($jajan_pasar = mysqli_fetch_array($data_produk)){

            ?>

            <tr>
                <td class="text-center"> <?php echo $jajan_pasar['id_produk'] ?></td>
                <td class="text-center"> <img src="images/<?php echo $jajan_pasar['gambar'] ?>" width="100px"></td>
                <td class="text-center"> <?php echo $jajan_pasar['nama_produk'] ?></td>
                <td class="text-center"> <?php echo $jajan_pasar['harga'] ?></td>
                <td class="text-center"> <?php echo $jajan_pasar['stok'] ?></td>
                <td class="text-center"> <?php echo $jajan_pasar['jenis_produk'] ?></td>
                <td class="text-center"> <?php echo $jajan_pasar['id_kategori'] ?></td>
                <td>
                    <a class="btn aksi" href="edit.php?id_produk=<?php echo $jajan_pasar['id_produk'] ?>">edit</a>
                    <a class="btn aksi" href="delete.php?id_produk=<?php echo $jajan_pasar['id_produk'] ?>" >delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
            </table>
        </div>

    <script>
        $(document).ready( function () {
        $('#example').DataTable();
        } );
    </script>



        </div>

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