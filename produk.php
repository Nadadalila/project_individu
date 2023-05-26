<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUK PAWON NDESO</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="css/style.css">

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

    <br><br><br><br><br><section class="product" id="product">

        <h1 class="heading">Aneka<span> Kuliner</span></h1>

        <div class="lihat_produk">
            <a href="produk_1.php" class="btn">lihat menu</a>
        </div><br><br><br>

        <div class="box-container">

            <div class="box">
                <?php
                    
                    include('connect.php');
        
                    $data_produk = mysqli_query($conn, "SELECT * FROM jajan_pasar");
        
                    while($jajan_pasar = mysqli_fetch_array($data_produk)){
        
                    
                ?>
                    <div class="image">
                        <img src="images/<?php echo $jajan_pasar['gambar'] ?>" width="100px">
                    </div>
                    <div class="content">
                        <h3> <?php echo $jajan_pasar['nama_produk'] ?> </h3>
                        <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>
                        <span class="price">Rp. <?php echo $jajan_pasar['harga'] ?></span>
                        <a href="#" class="btn">pesan</a>
                    </div>
                <?php
                     }
                ?>
            </div>
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