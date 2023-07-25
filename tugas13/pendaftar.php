<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

        /* Style untuk ikon edit dan delete */
        .icon-edit,
        .icon-delete {
            font-size: 20px;
            cursor: pointer;
            margin-right: 10px;
        }

        .icon-delete {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Pendaftar</h1>
        <a href="daftar_baru.php" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Daftar Baru</a>
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>";

            $no = 1; // Inisialisasi nomor awal

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$no."</td> 
                        <td>".$row['nama']."</td>
                        <td>".$row['alamat']."</td>
                        <td>".$row['jenis_kelamin']."</td>
                        <td>".$row['agama']."</td>
                        <td>".$row['sekolah_asal']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."' class='icon-edit' title='Edit'><i class='fas fa-edit'></i></a>
                            <a href='delete.php?id=".$row['id']."' class='icon-delete' onclick=\"return confirm('Apakah Anda yakin ingin menghapus pendaftar ini?');\" 
                            title='Delete'><i class='fas fa-trash-alt'></i></a>
                        </td>
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
