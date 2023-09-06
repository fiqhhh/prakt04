<?php
include 'koneksi.php';


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo $sql = "UPDATE tabel_mahasiswa SET nim='".$_POST["nim"]."', nama='".$_POST["nama"]."', prodi='".$_POST["prodi"]."',agama='".$_POST["agama"]."',kelamin='".$_POST["kelamin"]."'
            WHERE id='".$_POST["id"]."'";

if ($conn->query($sql) === TRUE) {
    header ('location:halaman01_datamahasiswa.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>