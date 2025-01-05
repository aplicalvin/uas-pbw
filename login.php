<?php
session_start();

// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = 'simbolon'; // Ganti sesuai password MySQL Anda
$database = 'booking_kos'; // Nama database Anda

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi login
    $query = "SELECT * FROM admin WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $admin['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $admin['username'];
            header('Location: index.php');
            exit;
        } else {
            $error = "Password salah.";
        }
    } else {
        $error = "Username tidak ditemukan.";
    }
    $stmt->close();
}

?>


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
        <?php
            include('components/navbar.php')
        ?>
        <!-- header section end -->

        <!-- Formulir -->

        <section class="signup-kotaklogin">
            <div class="signup-nggonlogin">
                <div>
                    <h1>Masuk</h1>
                    <p>Masuk untuk Admin</p>
                </div>

                <!-- Formulir -->
                <form method="post" action="" class="signup-form">
                    <div class="inputBox">
                        <span>username </span>
                        <input
                            type="varchar"
                            placeholder="Masukan username"
                            name="username"
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
            </div>

            <!-- Formulir -->
        </section>

        <!-- Formulir -->

        <?php 
        include('components/footer.php');
    ?>

        <!-- swiper js link -->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <!-- custom js file link -->
        <script src="js/script.js"></script>
    </body>
</html>
