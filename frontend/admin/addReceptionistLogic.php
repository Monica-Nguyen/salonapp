<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    
    $employeeid = $_POST['employeeid'];
    

    $sql = "INSERT INTO receptionist(employeeid) VALUES ('$employeeid')";

    header("Content-Type: JSON");
    if (mysqli_query($conn, $sql)) {

        echo json_encode("New receptionist added successfully!", JSON_PRETTY_PRINT);

        $output = array();

        array_push($output, $employeeid);

        echo json_encode($output, JSON_PRETTY_PRINT);

    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>
