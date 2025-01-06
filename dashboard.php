<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = 'simbolon'; // Ganti sesuai password MySQL Anda
$database = 'booking_kos'; // Nama database Anda

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Aksi CRUD
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Tambah/Edit data kamar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $id = $_POST['id'] ?? '';
    $namakamar = $_POST['namakamar'];
    $deskripsi = $_POST['deskripsi'];

    // Upload Gambar
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $targetDir = "uploads/";
        $image = $targetDir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    if ($id) {
        if ($image) {
            $query = "UPDATE datakamar SET namakamar='$namakamar', deskripsi='$deskripsi', image='$image' WHERE id=$id";
        } else {
            $query = "UPDATE datakamar SET namakamar='$namakamar', deskripsi='$deskripsi' WHERE id=$id";
        }
    } else {
        $query = "INSERT INTO datakamar (namakamar, deskripsi, image) VALUES ('$namakamar', '$deskripsi', '$image')";
    }

    if ($conn->query($query) === TRUE) {
        header('Location: dashboard.php');
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}

// Hapus data kamar
if ($action === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM datakamar WHERE id=$id";
    if ($conn->query($query) === TRUE) {
        header('Location: dashboard.php');
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - CRUD Kamar Kos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h1 class="text-center mb-4">Dashboard Admin</h1>
    
    <!-- CRUD Data Kamar -->
    <div class="card mb-4">
        <div class="card-header">CRUD Data Kamar</div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data" class="row g-3">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?? '' ?>">
                <div class="col-md-4">
                    <label for="namakamar" class="form-label">Nama Kamar</label>
                    <input type="text" class="form-control" id="namakamar" name="namakamar" required>
                </div>
                <div class="col-md-4">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="2" required></textarea>
                </div>
                <div class="col-md-4">
                    <label for="image" class="form-label">Upload Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kamar</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $result = $conn->query("SELECT * FROM datakamar");
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$no}</td>
                                <td>{$row['namakamar']}</td>
                                <td>{$row['deskripsi']}</td>
                                <td><img src='{$row['image']}' alt='Image' width='50'></td>
                                <td>
                                    <a href='?action=edit&id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='?action=delete&id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Hapus data?\")'>Hapus</a>
                                </td>
                              </tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Tidak ada data</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Table Booking Kamar -->
    <div class="card">
        <div class="card-header">Daftar Booking Kamar</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kamar</th>
                    <th>Nama Pemesan</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Tanggal Masuk</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $result = $conn->query("SELECT book.*, datakamar.namakamar FROM book INNER JOIN datakamar ON book.id_kamar = datakamar.id");
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$no}</td>
                                <td>{$row['namakamar']}</td>
                                <td>{$row['nama']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['no_telp']}</td>
                                <td>{$row['tanggal_masuk']}</td>
                              </tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>Tidak ada data</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
