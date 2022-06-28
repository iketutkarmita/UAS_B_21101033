<?php
include_once("dbkoneksi2.php");

$r["berhasil"] = false;
if (isset($_POST["niddosen"])) {
    $NIDDOSEN = $_POST["niddosen"];
    $NAMADOSEN = $_POST["namadosen"];
    $JDWLMENGAJAR = $_POST["jdwlmengajar"];


    $sql = "INSERT INTO dosen(NIDDOSEN, NAMADOSEN, JDWLMENGAJAR) 
            VALUES('$NIDDOSEN', '$NAMADOSEN', '$JDWLMENGAJAR');";

    mysqli_query($cnn, $sql);
    $r["berhasil"] = true;
}
echo json_encode($r);
