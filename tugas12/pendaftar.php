<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #8B4513;
            color: #fff;
            
        }

        tr:hover {
            background-color: #CD853F;
        }

        .empty-message {
            text-align: center;
            color: #777;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Pendaftar</h1>
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

        // Query untuk mengambil data pendaftar
        $sql = "SELECT * FROM pendaftar";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped table-hover'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Sekolah Asal</th>
                        </tr>
                    </thead>
                    <tbody>";

            $no = 1; // Inisialisasi nomor awal

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$no."</td> <!-- Menampilkan nomor pada kolom pertama -->
                        <td>".$row['nama']."</td>
                        <td>".$row['alamat']."</td>
                        <td>".$row['jenis_kelamin']."</td>
                        <td>".$row['agama']."</td>
                        <td>".$row['sekolah_asal']."</td>
                    </tr>";

                $no++; // Increment nomor untuk iterasi berikutnya
            }

            echo "</tbody>
                </table>";
        } else {
            echo "<p class='empty-message'>Belum ada data pendaftar.</p>";
        }

        $conn->close();
        ?>
    </div>

</body>
</html>
