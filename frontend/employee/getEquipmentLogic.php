<?php

include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();
$result = getEquipment($conn);

header("Content-Type: JSON");
$rowNumber = 0;
$output = array();

while($row = mysqli_fetch_array($result)){
    $output[$rowNumber]['equipmentid'] = $row['equipmentid'];
    $output[$rowNumber]['employeeno'] = $row['employeeno'];
    $output[$rowNumber]['name'] = $row['name'];
    $rowNumber++;
}

echo json_encode($output, JSON_PRETTY_PRINT);

?>