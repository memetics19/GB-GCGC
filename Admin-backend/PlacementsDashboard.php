<?php
require_once 'auth.php';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$year =$_GET["year"];
$students = [];
$sql = "select * from placements_dash where YOP=$year limit 5";
$status="";
$ct=0;
if($result=mysqli_query($con,$sql)){
    while($row=mysqli_fetch_assoc($result)){
        $students[$ct] = $row;
        $ct++;
    }
    echo(json_encode($students));
}
else{
    http_response_code(404);
}
?>