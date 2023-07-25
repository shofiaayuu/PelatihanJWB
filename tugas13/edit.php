<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pendaftar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Data Pendaftar</h1>
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

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $sekolah_asal = $_POST['sekolah_asal'];

            // Menyiapkan pernyataan SQL untuk memperbarui data di database
            $stmt = $conn->prepare("UPDATE pendaftar SET nama=?, alamat=?, jenis_kelamin=?, agama=?, sekolah_asal=? WHERE id=?");
            $stmt->bind_param("sssssi", $nama, $alamat, $jenis_kelamin, $agama, $sekolah_asal, $id);

            if ($stmt->execute()) {
                // Jika data berhasil diperbarui, langsung redirect ke halaman "pendaftar.php"
                header("Location: pendaftar.php");
                exit();
            } else {
                echo "Terjadi kesalahan: " . $stmt->error;
            }

            $stmt->close();
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Mengambil data pendaftar berdasarkan ID
            $stmt = $conn->prepare("SELECT * FROM pendaftar WHERE id=?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $nama = $row['nama'];
                $alamat = $row['alamat'];
                $jenis_kelamin = $row['jenis_kelamin'];
                $agama = $row['agama'];
                $sekolah_asal = $row['sekolah_asal'];
            } else {
                echo "Data pendaftar tidak ditemukan.";
                exit();
            }

            $stmt->close();
        } else {
            echo "ID pendaftar tidak diberikan.";
            exit();
        }

        $conn->close();
        ?>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="Laki-laki" <?php if ($jenis_kelamin === 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if ($jenis_kelamin === 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="agama">Agama:</label>
                <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $agama; ?>">
            </div>
            <div class="form-group">
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" value="<?php echo $sekolah_asal; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="pendaftar.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
