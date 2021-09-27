
<?php

include "../db/conn.php";

if ($_GET){

	$no_job  =$_GET['no_job'];


    $query = mysqli_query($db_conn, "Select * from tasks ");

    while($data = mysqli_fetch_assoc($query)){
        $arrayJson[] = $data;
    }
    $result = $arrayJson;
    echo json_encode($result);

} else {
    $result["error"] = true;
    $result["error_msg"] = "404";

    echo json_encode($reult);
}
?>