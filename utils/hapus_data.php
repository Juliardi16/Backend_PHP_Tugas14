<?php

include '../db/conn.php';

if ($_POST) {
    $no_job = $_POST['no_job'];
    $query = mysqli_query($db_conn, "Delete from tasks where no_job='$no_job'");
    if ($query){
        $res["error"] = false;
        $res["error_msg"] = "Berhasil";
        $res["no_job"] = $no_job;
        echo json_encode($res);
    } else{
        $res["error"] = false;
        $res["error_msg"] = "Gagal Mengirim";
        echo json_encode($res);
    }
}
else{
    $res["error"] = true;
    $res["error_msg"] = "404";

    echo json_encode($res);
}
?>