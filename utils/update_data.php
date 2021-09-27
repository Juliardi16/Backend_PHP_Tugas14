<?php


include '../db/conn.php';

if ($_POST) {
    $no_job = $_POST['no_job'];
    $status = $_POST['status'];


    $query = mysqli_query($db_conn, "UPDATE tasks SET status ='$status' where no_job ='$no_job'");
    if ($query){
        $res["pesan_error"] = false;
        $res["error_pesan"] = "Berhasil update";
        $res["no_job"] = $no_job;
        echo json_encode($res);
    } else{
        $res["pesan_error"] = false;
        $res["error_pesan"] = "Gagal update data";
        echo json_encode($res);
    }
}
else{
    $res["error"] = true;
    $response["error_msg"] = "404";

    echo json_encode($res);
}
?>
