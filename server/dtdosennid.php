<?php
$output["error"] = true;

if (isset($_GET["niddosen"])) {
    $niddosen = $_GET["niddosen"];

    include_once("dbkoneksi2.php");
    $sql = "SELECT NIDDOSEN, NAMADOSEN, JDWLMENGAJAR FROM dosen WHERE NIDDOSEN='" . $niddosen . "';";
    $hsl = mysqli_query($cnn, $sql);
    $output["isi"] = mysqli_fetch_all($hsl);
    $output["error"] = false;
}

echo json_encode($output);
