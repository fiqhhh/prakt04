<?php
include 'koneksi.php';


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tabel_mahasiswa (nim,nama,prodi,agama,kelamin)
VALUES ('".$_POST["nim"]."','".$_POST["nama"]."','".$_POST["prodi"]."','".$_POST["agama"]."','".$_POST["kelamin"]."')";

if ($conn->query($sql) === TRUE) {
    header ('location:halaman01_datamahasiswa.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>