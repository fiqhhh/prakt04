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
    <h2>Tambah Data</h2>
    <form action="insert.php" method="POST">
    <div class="mb-3 mt-3">
        <label for="email">NIM</label>
        <input type="text" class="form-control" id="email" placeholder="Enter NIM" name="nim">
    </div>
    <div class="mb-3 mt-3">
        <label for="email">Nama</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Nama" name="nama">
    </div>
    <div class="mb-3 mt-3">
    <label for="email">Prodi</label>
    <select class="form-select" aria-label="Default select example" name="prodi">
  <option selected>Pilih Jurusan</option>
  <option value="TRPL">TRPL</option>
  <option value="TRK">TRK</option>
  <option value="EKW">EKW</option>
</select>
    </div>
    <div class="mb-3 mt-3">
    <label for="email">Agama</label>
    <select class="form-select" aria-label="Default select example" name="agama">
  <option selected>Pilih Agama</option>
  <option value="Islam">Islam</option>
  <option value="Kristen">Kristen</option>
  <option value="Hindu">Hindu</option>
  <option value="Budha">Budha</option>
</select>
    </div>

    <div class="form-check">
  <input class="form-check-input" type="radio" name="kelamin" id="laki-laki" value="laki-laki">
  <label class="form-check-label" for="flexRadioDefault1">
    Laki-laki
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="kelamin" id="perempuan" value="perempuan" checked>
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