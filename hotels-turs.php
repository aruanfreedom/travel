<?php
include("db.php");

$json = json_decode($_POST['jsonData']);

$response = array();

foreach ($json as $key => $value) {
    if (empty($value)) {
        die("Error empty");
    }
    $response[] = $value;
}


$sql = "SELECT * FROM hotels WHERE country LIKE '%" . $response[0] . "%' 
        AND city LIKE '%" . $response[1] . "%'
        AND startDate <= '" . $response[2] . "'
        AND endDate >= '" . $response[3] . "'
        AND numberCount >= '" . $response[4] . "'";

$result = mysqli_query($link, $sql);

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data, JSON_UNESCAPED_UNICODE);

mysqli_close($link);

