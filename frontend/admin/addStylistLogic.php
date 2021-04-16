<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    
    $employeenumber = $_POST['employeenumber'];
    


    $sql = "INSERT INTO stylist(employeenumber) VALUES ('$employeenumber')";

    header("Content-Type: JSON");
    if (mysqli_query($conn, $sql)) {

        echo json_encode("New Stylist added successfully!", JSON_PRETTY_PRINT);

        $output = array();

        array_push($output, $employeenumber);

        echo json_encode($output, JSON_PRETTY_PRINT);

    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>
