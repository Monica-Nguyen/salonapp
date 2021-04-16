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
    $output[$rowNumber]['haircut'] = $row['haircut'];
    $output[$rowNumber]['updo'] = $row['updo'];
    $output[$rowNumber]['perm'] = $row['perm'];
    $output[$rowNumber]['shampoo'] = $row['shampoo'];
    $output[$rowNumber]['styling'] = $row['styling'];
    $output[$rowNumber]['color'] = $row['color'];
    $output[$rowNumber]['cost'] = $row['cost'];
    $output[$rowNumber]['equipmentno'] = $row['equipmentno'];
    
    $rowNumber++;
}

echo json_encode($output, JSON_PRETTY_PRINT);

?>