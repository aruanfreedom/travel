<?php
include("db.php");

$json = json_decode($_POST['jsonData']);

$response = array();


foreach ($json as $key=>$value) {
    if(empty($value)) {
        die("Error empty");
    }   
    $response[] = $value;
}


if (count($response[0]) > 1) {
    $data = array();

    for ($i = 0; $i < count($response[0]); $i++) {       

        $whendce = $json->location[$i]->whendce;
        $where = $json->location[$i]->where;
        $sd = $json->location[$i]->sd;
        $ed = $json->location[$i]->ed;

        $sql = "SELECT * FROM aircraft WHERE location LIKE '%" . $whendce . "%' 
                AND whereAir LIKE '%" . $where . "%'
                AND startDate <= '" . $sd . "'
                AND endDate >= '" . $ed . "'\n";   

        $result = mysqli_query($link, $sql);    
        
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }         

    }    

    echo json_encode($data, JSON_UNESCAPED_UNICODE);    

} else {
    $sql = "SELECT * FROM aircraft WHERE location LIKE '%" . $response[0] . "%' 
        AND whereAir LIKE '%" . $response[1] . "%'
        AND startDate <= '" . $response[2] . "'
        AND endDate >= '" . $response[3] . "'";

    $result = mysqli_query($link, $sql);

    $data = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    
}

mysqli_close($link);

