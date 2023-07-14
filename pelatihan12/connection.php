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

// Menambahkan data ke tabel
$data_produk = array(
    array(1, 'Canon', 'Hitam', 10),
    array(2, 'Samsung', 'Biru', 5),
    array(3, 'HP', 'Hijau', 8),
    array(4, 'Fuji Xerox', 'Putih', 6),
    array(5, 'Dell', 'Abu-abu', 7),
    array(6, 'Epson', 'Merah', 12),
    array(7, 'Lexmark', 'Kuning', 9),
);

foreach ($data_produk as $row) {
    $no = $row[0];
    $nama_merek = $row[1];
    $warna = $row[2];
    $jumlah = $row[3];

    $sql = "INSERT INTO tabel_produk (no, nama_merek, warna, jumlah)
            VALUES ('$no', '$nama_merek', '$warna', '$jumlah')";

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menampilkan isi tabel
$sql = "SELECT * FROM tabel_produk";
$result = $conn->query($sql);

// Menutup koneksi
$conn->close();
?>
