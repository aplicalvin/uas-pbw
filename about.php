<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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
    
<div class="heading" style="background:url(images/header4.jpg) no-repeat">
    <h1>about us</h1>
</div>
<!-- about section mulai -->
    <section class="about">
        <div class="image">
            <img src="images/home-about.jpg" alt="">
        </div>
    <div class="content">
        <h3>Why Chose Us?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum maiores sed error dignissimos molestias nam quod quis, aspernatur, unde veniam non placeat ex obcaecati blanditiis odit fugiat illum sapiente corrupti!</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem maiores odit, velit quis aliquam doloribus incidunt eius maxime doloremque nobis impedit, amet ex, reprehenderit itaque quae similique at ab? Reprehenderit.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-users">
                    <span>Top Boarding House</span>
                </i>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd">
                    <span>Affordable price</span>
                </i>
            </div>
            <div class="icons">
                <i class="fas fa-headset">
                    <span>24/7 Guide service</span>
                </i>
            </div>
        </div>
    </div>
    </section>
<!-- about section akhir -->
 <!-- Reviews section awal -->
  <section class="reviews">

    <div class="swiper reviews-slide">
        
        <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, animi architecto eum vel at facere placeat consequatur reiciendis vitae esse, minus dicta ipsam temporibus, aliquam autem. Enim consequatur recusandae ipsa.</p>
                <h3>Mr calvin</h3>
                <span>traveler</span>
                <img src="images/orang1.jpg" alt="">
            </div>

            <div class="slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quasi, consequuntur eos voluptate atque vero architecto natus facilis magni tempora dicta molestiae adipisci. Nostrum fuga, cupiditate ipsa modi, porro explicabo id doloremque dolore soluta harum nihil error, iure minima quia.</p>
                <h3>Mr calvin</h3>
                <span>traveler</span>
                <img src="images/orang2.jpg" alt="">
            </div>

            <div class="slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, animi architecto eum vel at facere placeat consequatur reiciendis vitae esse, minus dicta ipsam temporibus, aliquam autem. Enim consequatur recusandae ipsa.</p>
                <h3>Mr calvin</h3>
                <span>traveler</span>
                <img src="images/orang3.jpg" alt="">
            </div>

        </div>

        </div>
   
    </div>
  </section>
 <!-- Reviews section akhir -->




















 <?php 
    include('components/footer.php');
?>


<!-- swiper js link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
 <script src="js/script.js"></script>


</body>
</html>