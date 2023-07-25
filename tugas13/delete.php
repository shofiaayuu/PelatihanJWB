<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'vsga';
$connection = new mysqli($host, $username, $password, $dbname);
// Cek koneksi
if ($connection->connect_error) {
die("Koneksi database gagal: " . $connection->connect_error);
}
// Mengambil ID siswa dari parameter URL
if (isset($_GET['id'])) {
$id = $_GET['id'];
// Query untuk menghapus data berdasarkan ID
$sql = "DELETE FROM pendaftar WHERE id = $id";
// Eksekusi query
if ($connection->query($sql) === TRUE) {
    header("Location: pendaftar.php");
exit();
} else {
echo "Error: " . $sql . "<br>" . $connection->error;
}
}
// Menutup koneksi database
$connection->close();
?>