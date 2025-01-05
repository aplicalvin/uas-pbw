<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PapaKost - Kost Campur Andalan kalian!</title>

        <!-- swiper css link -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />

        <!-- font awesome cdn link -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <!-- custom css file link -->
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <!-- header section starts -->

        <section class="header">
            <a href="home.php" class="logo">PapaKost.</a>

            <nav class="navbar">
                <a href="about.php">about</a>
                <a href="package.php">kamar</a>
                <a href="book.php">pesan</a>
                <a href="login.php">Masuk</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
        <!-- header section end -->

        <!-- home section starts -->

        <section class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div
                        class="swiper-slide slide"
                        style="background: url(images/header1.jpg) no-repeat"
                    >
                        <div class="content">
                            <span>safety & easy to use</span>
                            <h3>indonesian boarding house website</h3>
                            <a href="package.php" class="btn">discover</a>
                        </div>
                    </div>

                    <div
                        class="swiper-slide slide"
                        style="background: url(images/header1-2.jpg) no-repeat"
                    >
                        <div class="content">
                            <span>safety & easy to use</span>
                            <h3>indonesian boarding house website</h3>
                            <a href="package.php" class="btn">discover</a>
                        </div>
                    </div>

                    <div
                        class="swiper-slide slide"
                        style="background: url(images/header1-4.jpg) no-repeat"
                    >
                        <div class="content">
                            <span>safety & easy to use</span>
                            <h3>indonesian boarding house website</h3>
                            <a href="package.php" class="btn">discover</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <!-- home section end -->

        <!-- home about section starts -->

        <section class="home-about">
            <div class="image">
                <img src="images/home-about.jpg" alt="" />
            </div>

            <div class="content">
                <h3>about us</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Eum neque suscipit accusamus, reiciendis voluptate, dolorem
                    cum consectetur eaque et corrupti quibusdam delectus
                    molestiae aut hic eligendi minima quasi, sint repellendus?
                </p>
                <a href="about.php" class="btn">read more</a>
            </div>
        </section>

        <!-- home about section end -->

        <!-- home package section start -->

        <section class="home-packages">
            <h1 class="heading-title">boarding room</h1>

            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="images/kos1.jpg" alt="" />
                    </div>
                    <div class="content">
                        <h3>adventour & tour</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit assumenda.
                        </p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/kos2.jpg" alt="" />
                    </div>
                    <div class="content">
                        <h3>adventour & tour</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit assumenda.
                        </p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/kos3.jpg" alt="" />
                    </div>
                    <div class="content">
                        <h3>adventour & tour</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit assumenda.
                        </p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>
            </div>

            <div class="load-more">
                <a href="package.php" class="btn">load more</a>
            </div>
        </section>

        <!-- home package section end -->

        <!-- home offer section start -->

        <section class="home-offer">
            <div class="content">
                <h3>up to 20% off!</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Impedit assumenda molestias, quis velit ea excepturi! Totam,
                    nostrum? Explicabo cum tenetur, cumque, quaerat eius
                    deserunt voluptatibus assumenda odit a aliquam quos.
                </p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </section>

        <!-- home offer section end -->

        <!-- footer section starts -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>quick links</h3>
                    <a href="home.php">
                        <i class="fas fa-angle-right"></i>home</a
                    >
                    <a href="about.php"
                        ><i class="fas fa-angle-right"></i>about</a
                    >
                    <a href="package.php"
                        ><i class="fas fa-angle-right"></i>package</a
                    >
                    <a href="book.php"
                        ><i class="fas fa-angle-right"></i>book</a
                    >
                </div>

                <div class="box">
                    <h3>extra links</h3>
                    <a href="#">
                        <i class="fas fa-angle-right"></i>ask questions</a
                    >
                    <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
                    <a href="#">
                        <i class="fas fa-angle-right"></i>privacy policy</a
                    >
                    <a href="#">
                        <i class="fas fa-angle-right"></i>terms of use</a
                    >
                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"> <i class="fas fa-phone"></i>+123-456-789</a>
                    <a href="#"> <i class="fas fa-phone"></i>+111-222-333</a>
                    <a href="#">
                        <i class="fas fa-envelope"></i> rehan@gmail.com</a
                    >
                    <a href="#">
                        <i class="fas fa-map"></i>jl. doang jadian kaga</a
                    >
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"> <i class="fab fa-facebook"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </div>
            </div>

            <div class="credit">
                created by <span>gamers ganteng</span> | all rights reserved.
            </div>
        </section>
        <!-- footer section end -->

        <!-- swiper js link -->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <!-- custom js file link -->
        <script src="js/script.js"></script>
    </body>
</html>
