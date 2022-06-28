<?php
include_once("dbkoneksi2.php");

$r["berhasil"] = false;
if (isset($_POST["kdmatkul"])) {
    $KDMATKUL = $_POST["kdmatkul"];
    $NAMAMATKUL = $_POST["namamatkul"];
    $JDWLMATKUL = $_POST["jdwlmatkul"];


    $sql = "INSERT INTO matkul(KDMATKUL, NAMAMATKUL, JDWLMATKUL) 
            VALUES('$KDMATKUL', '$NAMAMATKUL', '$JDWLMATKUL');";

    mysqli_query($cnn, $sql);
    $r["berhasil"] = true;
}
echo json_encode($r);
