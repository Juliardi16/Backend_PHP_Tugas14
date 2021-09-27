<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_messengger";

$db_conn = mysqli_connect($server, $user, $password, $nama_database);

if( !$db_conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>