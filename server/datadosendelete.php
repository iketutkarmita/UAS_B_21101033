<?php
include_once("dbkoneksi2.php");

$r["berhasil"] = false;
if (isset($_POST["niddosen"])) {
    $NIDDOSEN = $_POST["niddosen"];

    $sql = "DELETE FROM dosen WHERE NIDDOSEN='" . $NIDDOSEN . "'";

    mysqli_query($cnn, $sql);
    $r["berhasil"] = true;
}
echo json_encode($r);
