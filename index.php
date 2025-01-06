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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


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
                <h3>Tentang Kami</h3>
                <p>
                    Anda mencari kost campur yang bebas dan tanpa pengawasan orang tua? Kami adalah solusinya! Nikmati perasaan menjadi dewasa bahkan tanpa harus berusia 18 tahun!. Nikmati sensasi dewasa sekarang juga!
                </p>
                <a href="about.php" class="btn">read more</a>
            </div>
        </section>

        <!-- home about section end -->

        <!-- home package section start -->

        <section class="home-packages">
            <h1 class="heading-title">boarding room</h1>

            <div class="box-container">
            <?php
        // Step 1: Connect to the database
        $servername = "localhost";
        $username = "root"; // Change this to your database username
        $password = "simbolon"; // Change this to your database password
        $dbname = "booking_kos"; // Change this to your database name

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Step 2: Query the database for room data
        $sql = "SELECT id, namakamar, deskripsi, image FROM datakamar";
        $result = $conn->query($sql);

        // Step 3: Loop through the results and generate HTML for each room
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '
                <div class="box">
                    <div class="image">
                        <img src="' . $row['image'] . '" alt="" height="500">
                    </div>
                    <div class="content">
                        <h3>' . $row['namakamar'] . '</h3>
                        <p>' . $row['deskripsi'] . '</p>
                        <a href="book.php?id=' . $row['id'] . '" class="btn">Book Now</a>
                    </div>
                </div>';
            }
        } else {
            echo "No rooms available.";
        }

        // Step 4: Close the connection
        $conn->close();
        ?>
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
                    Dapatkan diskon lebih dari 20% dengan syarat dan ketentuan tertentu. 
                </p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </section>

        <!-- home offer section end -->

        <?php 
include('components/footer.php');
?>

        <!-- swiper js link -->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <!-- custom js file link -->
        <script src="js/script.js"></script>
    </body>
</html>
