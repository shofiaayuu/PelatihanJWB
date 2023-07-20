<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Baru</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 align="center">Formulir Pendaftaran </h2>
        <form method="post" action="create.php">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label><br>
                    <input type="radio" name="jenis_kelamin" id="l" value="Laki-laki"> Laki-laki</option> <br>
                    <input type="radio" name="jenis_kelamin" id="p" value="Perempuan"> Perempuan</option>
            
            </div>

            <div class="form-group">
                <label for="agama">Agama:</label>
                <select name="agama" id="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katholik</option>
                    <option>Budha</option>
                    <option>Hindu</option>
                    <option>Lainnya</option>
                </select>
            </div>

            <div class="form-group">
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" id="sekolah_asal" class="form-control" required>
            </div>

            <input type="submit" value="DAFTAR" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
