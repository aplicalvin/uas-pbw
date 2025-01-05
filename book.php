<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book now</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- custom css file link -->
      <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <!-- header section starts -->
        <?php
            include('components/navbar.php')
        ?>
        <!-- header section end -->
    
<div class="heading" style="background:url(images/header3.jpg) no-repeat">
    <h1>book now</h1>
</div>
<!-- Booking section awal -->
    <section class="booking">
        <h1 class="heading-title">Booking Kos Sekarang!!</h1>
        <form action="book_form.php" method="post" class="book-form">

        <div class="inputBox">
            <span>Nama :</span>
            <input type="text" placeholder="Masukan nama anda" name="name">
        </div>
        <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Masukan email" name="email">
        </div>
        <div class="inputBox">
            <span>No Hp :</span>
            <input type="number" placeholder="Masukan no hp" name="phone">
        </div>
        <div class="inputBox">
            <span>Kota Asal :</span>
            <input type="number" placeholder="Masukkan Kota Asal Anda" name="location">
        </div>
        <div class="inputBox">
            <span>Tanggal masuk :</span>
            <input type="date" name="masuk">
        </div>

        <input type="submit" value="submit" class="btn" name="send">




        </form>
    </section>
<!-- Booking section akhir -->


















<?php 
    include('components/footer.php');
?>


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
 <script src="js/script.js"></script>


</body>
</html>