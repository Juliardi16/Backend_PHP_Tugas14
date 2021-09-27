<?php
include "../db/conn.php";

if ($_POST) {

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username =$_POST['username'];
    $password =$_POST['password'];

    $query ="INSERT INTO tb_user
(nik, nama, email , username , password )
VALUE ('$nik', '$nama', '$email', '$username','$password')";

    $result = mysqli_query($db_conn, $query);
    if ($result){
        $res["pesan_error"] = false;
        $res["error_pesan"] = "Berhasil Registrasi";
        echo json_encode($res);
    } else{
        $res["pesan_error"] = false;
        $res["error_pesan"] = "Gagal Registrasi";
        echo json_encode($res);
    }

}
else{
    $res["pesan_error"] = true;
    $res["error_pesan"] = "404";

    echo json_encode($res);
}
?>