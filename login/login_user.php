<?php

include "../db/conn.php";
 if($_GET){

	 $username =$_GET['username'];
	 $password =$_GET['password'];

	$query =mysqli_query($db_conn,"select*from tb_user where username = '$username' and password ='$password'");
    $result = mysqli_fetch_assoc($query);


    $nik = "".$result['nik'];
    $user = "".$result['username'];
    $pass = "".$result['password'];

    if ($query) {
        $res["pesan_error"] = false;
        $res["error_pesan"] = "Login Success";
        $res["nik"] = $nik;
        $res["username"] = $user;
        $res["password"] = $pass;
        echo json_encode($res);
    } else{
        $res["pesan_error"] = false;
        $res["error_pesan"] = "Gagal login";
        echo json_encode($res);
    }

  } else {
    $res["pesan_error"] = true;
    $res["error_pesan"] = "404";

    echo json_encode($res);
 }
?>

