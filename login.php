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

        <!-- Formulir -->

        <section class="signup-kotaklogin">
            <div class="signup-nggonlogin">
                <div>
                    <h1>Masuk</h1>
                    <p>Masuk untuk dapat memesan kamar kos</p>
                </div>

                <!-- Formulir -->
                <form action="login_form.php" method="post" class="signup-form">
                    <div class="inputBox">
                        <span>Email :</span>
                        <input
                            type="email"
                            placeholder="Masukan email"
                            name="email"
                        />
                    </div>

                    <div class="inputBox">
                        <span>Password :</span>
                        <input
                            type="password"
                            placeholder="Masukkan kata sandi"
                            name="password"
                        />
                    </div>

                    <input
                        type="submit"
                        value="Masuk"
                        class="btn"
                        name="login"
                    />
                </form>
                <p>Belum memiliki akun? <a href="signup.php">buat akun</a></p>
            </div>

            <!-- Formulir -->
        </section>

        <!-- Formulir -->

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
