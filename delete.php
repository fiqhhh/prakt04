<?php
include 'koneksi.php';


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo $sql = "DELETE FROM tabel_mahasiswa WHERE id='".$_GET["id"]."'";

if ($conn->query($sql) === TRUE) {
    header ('location:halaman01_datamahasiswa.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>