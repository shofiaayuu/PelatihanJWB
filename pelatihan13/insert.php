<?php
// Informasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vsga";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memasukkan data ke dalam tabel
$no = $_POST['no'];
$nama_merek = $_POST['nama_merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

$sql = "INSERT INTO produk (no, nama_merek, warna, jumlah)
        VALUES ('$no', '$nama_merek', '$warna', '$jumlah')";

if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
    echo "Data berhasil dimasukkan ke dalam tabel.";
}

// Menutup koneksi
$conn->close();
?>
