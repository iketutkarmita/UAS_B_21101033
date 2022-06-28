<?php
if (isset($_GET["p"])) {
  if ($_GET["p"] === "beranda") {
    $APage = "active";
    $pg = "beranda.php";
    $TPage = "Beranda";
  }
  if ($_GET["p"] === "mhs") {
    $MhsPage = "active";
    if (isset($_GET["sp"])) {
      if ($_GET["sp"] == "addnew") {
        $pg = "pagemhsadd.php";
        $TPage = "Menambahkan data Mahasiswa";
      }
      if ($_GET["sp"] == "edit") {
        $pg = "pagemhsedit.php";
        $TPage = "Edit Data Mahasiswa";
      }
      if ($_GET["sp"] == "dele") {
        $pg = "pagemhsdele.php";
        $TPage = "Hapus Data Mahasiswa";
      }
    } else {
      $pg = "pagemhslist.php";
      $TPage = "List Data Mahasiswa";
    }
  }
  if ($_GET["p"] === "dsn") {
    $DsnPage = "active";
    if (isset($_GET["sp"])) {
      if ($_GET["sp"] == "addnew") {
        $pg = "pageDosenAdd.php";
        $TPage = "Tambah Data Dosen";
      }
      if ($_GET["sp"] == "editdsn") {
        $pg = "pageDosenEdit.php";
        $TPage = "Edit Data Dosen";
      }
      if ($_GET["sp"] == "deletedsn") {
        $pg = "pageDosenDelete.php";
        $TPage = "Hapus Data Dosen";
      }
    } else {
      $pg = "pageDosenList.php";
      $TPage = "Data Dosen";
    }
  }
  if ($_GET["p"] === "mk") {
    $MkPage = "active";
    if (isset($_GET["sp"])) {
      if ($_GET["sp"] == "addnew") {
        $pg = "pageMatkulAdd.php";
        $TPage = "Tambah Data Mata Kuliah";
      }
      if ($_GET["sp"] == "editmk") {
        $pg = "pageMatkulEdit.php";
        $TPage = "Edit Data Mata Kuliah";
      }
      if ($_GET["sp"] == "deletemk") {
        $pg = "pageMatkulDelete.php";
        $TPage = "Hapus Data Mata Kuliah";
      }
    } else {
      $pg = "pageMatkulList.php";
      $TPage = "Data Mata Kuliah";
    }
  }
} else {
  $APage = "active";
  $pg = "beranda.php";
  $TPage = "Beranda";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $TPage; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #9400D3;">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #9400D3;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">UAS WEBPROG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link fw-bold <?= $APage; ?>" aria-current="page" href="index.php?p=beranda">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold <?= $MhsPage; ?>" href="index.php?p=mhs">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold <?= $MkPage; ?>" href="index.php?p=mk">Mata Kuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold <?= $DsnPage; ?>" href="index.php?p=dsn">Dosen</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <?php
    include_once($pg);
    ?>
  </div>


</body>

</html>