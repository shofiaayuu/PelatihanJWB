<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
    </style><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container table-container">
        <h3 align="center" >*** PRODUK PRINTER ***</h3>
        <?php
        require_once 'connection.php';

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
                        <th scope='row'>" . $row["no"] . "</th>
                        <td>" . $row["nama_merek"] . "</td>
                        <td>" . $row["warna"] . "</td>
                        <td>" . $row["jumlah"] . "</td>
                    </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "Tabel produk kosong";
        }

        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

