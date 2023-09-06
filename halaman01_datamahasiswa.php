<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
    <h2>DATABASE MAHASISWA</h2>
    <div class="table-responsive-sm">
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
            Operasi Data
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="halaman02_insertdata.php">Menambah Data Baru</a></li>
            <li><a class="dropdown-item" href="#">Link 2</a></li>
        </ul>
</div>
    <table class="table table-bordered">
    <thead>
        <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Agama</th>
        <th>Jenis Kelamin</th>
        <th colspan="2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM tabel_mahasiswa";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
            $no = 1;
            while($row = $result->fetch_assoc()) {
            // echo "id: " . $row["id"]. " - Name: " . $row["nim"]. " " . $row["nama"]. "<br>";
            
            echo "<tr>
            <td>".$no++."</td>
            <td>". $row["nim"]."</td>
            <td>". $row["nama"]."</td>
            <td>". $row["prodi"]."</td>
            <td>". $row["agama"]."</td>
            <td>". $row["kelamin"]."</td>"?>
            <td><a class="btn btn-primary"href="formupdate.php?id=<?= $row['id']; ?>">Update</a></td>
            <td><a onclick="return confirm('Yakin ingin hapus <?= $row['nama']; ?>?')" class="btn btn-danger" href="delete.php?id=<?= $row['id']; ?>">Delete</a></td>
            <?php "</tr>";
        }
        } else {
            echo "0 results";
        }
        $conn->close();

    ?>
    </tbody>
    </table>
    </div>
</div>

</body>
</html>