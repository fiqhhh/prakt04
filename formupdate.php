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
    <h2>Update Data</h2>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];                                                         
        $sql = "SELECT * FROM tabel_mahasiswa WHERE id='$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    ?>
    <form action="update.php" method="POST">
    <div class="mb-3 mt-3">
        <label for="email">NIM</label>
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <input type="text" class="form-control" id="email" placeholder="Enter NIM" name="nim" value="<?= $row['nim']; ?>">
    </div>
    <div class="mb-3 mt-3">
        <label for="email">Nama</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Nama" name="nama" value="<?= $row['nama']; ?>">
    </div>
    <div class="mb-3 mt-3">
    <label for="email">Prodi</label>
    <select class="form-select" aria-label="Default select example" name="prodi">
  <option>Pilih Jurusan</option>
  <option value="TRPL" <?php if($row['prodi']=="TRPL"){echo "selected";}?>>TRPL</option>
  <option value="TRK" <?php if($row['prodi']=="TRK"){echo "selected";}?>>TRK</option>
  <option value="EKW" <?php if($row['prodi']=="EKW"){echo "selected";}?>>EKW</option>
</select>
    </div>
    <div class="mb-3 mt-3">
    <label for="email">Agama</label>
    <select class="form-select" aria-label="Default select example" name="agama">
  <option selected>Pilih Agama</option>
  <option value="Islam" <?php if($row['agama']=="Islam"){echo "selected";}?>>Islam</option>
  <option value="Kristen" <?php if($row['agama']=="Kristen"){echo "selected";}?>>Kristen</option>
  <option value="Hindu" <?php if($row['agama']=="Hindu"){echo "selected";}?>>Hindu</option>
  <option value="Budha" <?php if($row['agama']=="Budha"){echo "selected";}?>>Budha</option>
</select>
    </div>

    <div class="form-check">
  <input class="form-check-input" type="radio" name="kelamin" id="laki-laki" value="laki-laki" <?php if($row['kelamin']=="laki-laki"){echo "checked";}?>>
  <label class="form-check-label" for="flexRadioDefault1">
    Laki-laki
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="kelamin" id="perempuan" value="perempuan" <?php if($row['kelamin']=="perempuan"){echo "checked";}?>>
  <label class="form-check-label" for="flexRadioDefault2">
    Perempuan
  </label>
</div>
    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
    <a class="btn btn-primary active" href="halaman01_datamahasiswa.php">Batal</a>
</form>
</div>

</body>
</html>