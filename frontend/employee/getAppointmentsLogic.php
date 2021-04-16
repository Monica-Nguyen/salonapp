
    <?php

include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();
$result = getAppointments($conn);

header("Content-Type: JSON");
$rowNumber = 0;
$output = array();

while($row = mysqli_fetch_array($result)){
    $output[$rowNumber]['idservice'] = $row['idservice'];
    $output[$rowNumber]['idclient'] = $row['idclient'];
    $output[$rowNumber]['idstylist'] = $row['idstylist'];
    $output[$rowNumber]['idreceptionist'] = $row['idreceptionist'];
    $output[$rowNumber]['startdatetime'] = $row['startdatetime'];
    $output[$rowNumber]['enddatetime'] = $row['enddatetime'];
    $output[$rowNumber]['previousapt'] = $row['previousapt'];
    $output[$rowNumber]['previousservice'] = $row['previousservice'];
    $rowNumber++;
}

echo json_encode($output, JSON_PRETTY_PRINT);

?>