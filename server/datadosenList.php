<?php
include_once("dbkoneksi2.php");
$sql = "SELECT NIDDOSEN, NAMADOSEN, JDWLMENGAJAR FROM dosen";
$hasil = mysqli_query($cnn, $sql);
$output = mysqli_fetch_all($hasil);
echo json_encode($output);
