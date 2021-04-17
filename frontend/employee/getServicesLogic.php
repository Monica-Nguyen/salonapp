<?php

include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();
$result = getServices($conn);

header("Content-Type: JSON");
$rowNumber = 0;
$output = array();

while($row = mysqli_fetch_array($result)){
    $output[$rowNumber]['serviceid'] = $row['serviceid'];
    $output[$rowNumber]['servicename'] = $row['servicename'];
    $output[$rowNumber]['cost'] = $row['cost'];
    $output[$rowNumber]['equipmentno'] = $row['equipmentno'];
    
    $rowNumber++;
}

echo json_encode($output, JSON_PRETTY_PRINT);

?>