<?php

include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();
$result = getClients($conn);

header("Content-Type: JSON");
$rowNumber = 0;
$output = array();

while($row = mysqli_fetch_array($result)){
    $output[$rowNumber]['clientid'] = $row['clientid'];
    $output[$rowNumber]['salonno'] = $row['salonno'];
    $output[$rowNumber]['phone'] = $row['phone'];
    $output[$rowNumber]['firstname'] = $row['firstname'];
    $output[$rowNumber]['lastname'] = $row['lastname'];
    $output[$rowNumber]['email'] = $row['email'];
    $output[$rowNumber]['address'] = $row['address'];
    $output[$rowNumber]['postalcode'] = $row['postalcode'];
    $output[$rowNumber]['city'] = $row['city'];
    $output[$rowNumber]['stateorprovince'] = $row['stateorprovince'];
    $output[$rowNumber]['country'] = $row['country'];
    $output[$rowNumber]['discount'] = $row['discount'];        
    $rowNumber++;
}

echo json_encode($output, JSON_PRETTY_PRINT);

?>