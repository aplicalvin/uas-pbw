<?php
// Cek apakah form disubmit
if (isset($_POST['send'])) {
    // Tangkap data dari form
    $id_kamar = $_POST['id_kamar'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $arrival = $_POST['arrival'];

    // Koneksi ke database
    $servername = "localhost";
    $username = "root"; // Ganti dengan username database Anda
    $password = "simbolon"; // Ganti dengan password database Anda
    $dbname = "booking_kos"; // Ganti dengan nama database Anda

    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepared statement untuk mencegah SQL injection
    // Perhatikan bahwa no_telp bertipe string, jadi gunakan 's' untuk bind_param
    $stmt = $conn->prepare("INSERT INTO book (nama, email, no_telp, tanggal_masuk, id_kamar) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $email, $phone, $arrival, $id_kamar); // Memperbaiki tipe parameter

    // Eksekusi query
    if ($stmt->execute()) {
        $feedback = "Booking successful!";
    } else {
        $feedback = "Error: " . $stmt->error;
    }

    // Tutup prepared statement dan koneksi
    $stmt->close();
    $conn->close();
}

// Tangkap ID kamar dari URL
$id_kamar = isset($_GET['id']) ? $_GET['id'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>

    <!-- Swiper CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Header Section -->
<?php include('components/navbar.php'); ?>

<!-- Heading Section -->
<div class="heading" style="background:url(images/header3.jpg) no-repeat">
    <h1>Book Now</h1>
</div>

<!-- Feedback Message (Jika ada) -->
<?php if (isset($feedback)) { echo "<div class='feedback'>$feedback</div>"; } ?>

<!-- Booking Section -->
<section class="booking">
    <h1 class="heading-title">Booking Kos Sekarang!!</h1>

    <!-- Form untuk booking -->
    <form action="book.php?id=<?php echo $id_kamar; ?>" method="post" class="book-form">

        <!-- Input ID Kamar (diisi otomatis dari URL) -->
        <div class="inputBox">
            <span>ID Kamar</span>
            <input type="text" value="<?php echo $id_kamar; ?>" name="id_kamar" readonly>
        </div>

        <!-- Input Nama -->
        <div class="inputBox">
            <span>Nama:</span>
            <input type="text" placeholder="Masukkan nama Anda" name="name" required>
        </div>

        <!-- Input Email -->
        <div class="inputBox">
            <span>Email:</span>
            <input type="email" placeholder="Masukkan email" name="email" required>
        </div>

        <!-- Input No Hp -->
        <div class="inputBox">
            <span>No Hp:</span>
            <input type="text" placeholder="Masukkan no hp" name="phone" required>
        </div>

        <!-- Input Kota Asal -->
        <div class="inputBox">
            <span>Kota Asal:</span>
            <input type="text" placeholder="Masukkan Kota Asal Anda" name="city" required>
        </div>

        <!-- Input Tanggal Masuk -->
        <div class="inputBox">
            <span>Tanggal Masuk:</span>
            <input type="date" name="arrival" required>
        </div>

        <!-- Tombol Submit -->
        <input type="submit" value="Submit" class="btn" name="send">
    </form>
</section>

<!-- Footer Section -->
<?php include('components/footer.php'); ?>

<!-- Swiper JS Link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Custom JS File Link -->
<script src="js/script.js"></script>

</body>
</html>
