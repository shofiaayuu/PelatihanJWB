<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'vsga';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Memeriksa apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // Menyiapkan pernyataan SQL untuk memasukkan data ke dalam database
    $stmt = $conn->prepare("INSERT INTO pendaftar (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $alamat, $jenis_kelamin, $agama, $sekolah_asal);

    if ($stmt->execute()) {
        // Jika data berhasil disimpan, langsung redirect ke halaman "pendaftar.php"
        header("Location: pendaftar.php");
        exit();
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
