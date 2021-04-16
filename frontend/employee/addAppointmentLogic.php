<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $clientName = $_POST['clientName'];
    $employeeName = $_POST['employeeName'];
    $startdatetime = $_POST['startdatetime'];
    $enddatetime = $_POST['enddatetime'];
    $serviceID = $_POST['serviceID'];
    $previousapt = $_POST['previousapt'];
    $previousservice = $_POST['previousservice'];

    $getClientID = "SELECT clientid FROM client where firstname='".$clientName."'";
    $result = mysqli_query($conn, $getClientID);
    $idclient = 0;
    while($row = mysqli_fetch_array($result)){
        $idclient = $row['clientid'];
    }

    $getEmployeeID = "SELECT employeeid FROM employee where firstname='".$employeeName."'";
    $result = mysqli_query($conn, $getEmployeeID);
    $idstylist = 0;
    while($row = mysqli_fetch_array($result)){
        $idstylist = $row['employeeid'];
    }
    

    $sql = "INSERT INTO appointment(idservice, idclient, idstylist, startdatetime, enddatetime, previousapt, previousservice) VALUES ('$serviceID', '$idclient', '$idstylist', '$startdatetime', '$enddatetime', '$previousapt', '$previousservice')";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("New appointment added successfully!", JSON_PRETTY_PRINT);


    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>