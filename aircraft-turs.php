<?php
include("db.php");

$json = json_decode($_POST['jsonData']);

$response = array();
//$sql;

foreach ($json as $key=>$value) {
    if(empty($value)) {
        die("Error empty");
    }
    $response[] = $value;
}

$sql = "SELECT * FROM aircraft WHERE whereAir LIKE '%" . $response[0] . "%'";

$result = mysqli_query($link, $sql);

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data, JSON_UNESCAPED_UNICODE);