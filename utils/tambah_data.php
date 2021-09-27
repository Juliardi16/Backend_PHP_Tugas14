<?php


include '../db/conn.php';

if ($_POST) {

    $no_job = $_POST['no_job'];
    $nama_pic = $_POST['pic'];
    $departement = $_POST['departement'];
    $customer = $_POST['customer'];
    $keperluan= $_POST['keperluan'];
    $nama_dokumen = $_POST['nama_dokumen'];
    $tujuan = $_POST['tujuan'];



    $query = "INSERT INTO tasks
(no_job, pic, departement, customer, keperluan, nama_dokumen, tujuan)
VALUE ('$no_job', '$nama_pic', ' $departement', ' $customer', ' $keperluan', '$nama_dokumen', ' $tujuan')";

    $result = mysqli_query($db_conn, $query);
    if ($result){
        $res["pesan_eror"] = false;
        $res["error_pesan"] = "Berhasil tambah data";
        echo json_encode($res);
    } else{
        $res["pesan_error"] = false;
        $res["erro_pesan"] = "Gagal tambah data ";
        echo json_encode($res);
    }

}
else{
    $res["pesan_error"] = true;
    $res["error_pesan"] = "404";

    echo json_encode($res);
}
?>