<!DOCTYPE html>
<html>
<head>
    <title>Tampilan Data Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
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

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        table th {
            background-color: #f2f2f2;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Produk</h1>
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

        // Mengambil data dari tabel
        $sql = "SELECT * FROM produk";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped'>
                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>No</th>
                            <th scope='col'>Nama Merek</th>
                            <th scope='col'>Warna</th>
                            <th scope='col'>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["no"] . "</td>
                        <td>" . $row["nama_merek"] . "</td>
                        <td>" . $row["warna"] . "</td>
                        <td>" . $row["jumlah"] . "</td>
                    </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "Tabel produk kosong";
        }

        // Menutup koneksi
        $conn->close();
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
