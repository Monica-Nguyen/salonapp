
<?php

include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();
$result = getHairCharacteristics($conn);

header("Content-Type: JSON");
$rowNumber = 0;
$output = array();

while($row = mysqli_fetch_array($result)){
    $output[$rowNumber]['clientno'] = $row['clientno'];
    $output[$rowNumber]['colorformula'] = $row['colorformula'];
    $output[$rowNumber]['length'] = $row['length'];
    $output[$rowNumber]['texture'] = $row['texture'];
    $output[$rowNumber]['style'] = $row['style'];
    $output[$rowNumber]['notes'] = $row['notes'];
    $rowNumber++;
}

echo json_encode($output, JSON_PRETTY_PRINT);

?>