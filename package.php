<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>

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
<div class="heading" style="background:url(images/header2.jpg) no-repeat">
    <h1>Packages</h1>
</div>

<!-- Packages Section -->
<section class="packages">
    <h1 class="heading-title">Top Bedroom</h1>
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

    <div class="load-more"><span class="btn">Load More</span></div>
</section>

<!-- Footer Section -->
<?php include('components/footer.php'); ?>

<!-- Swiper JS Link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Custom JS File Link -->
<script src="js/script.js"></script>

</body>
</html>
