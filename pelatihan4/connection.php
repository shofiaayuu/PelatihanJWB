<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vsga";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah form telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $password = $_POST["password"];

    // Menyimpan data ke database
    $sql = "INSERT INTO tabel_register (nama, email, alamat, jenis_kelamin, password) VALUES ('$nama', '$email', '$alamat', '$jenis_kelamin', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan ke database.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
