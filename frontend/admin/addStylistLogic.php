<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    
    $employeeName = $_POST['employeeName'];
    
    $getEmployeeID = "SELECT employeeid FROM employee where firstname='".$employeeName."'";
    $result = mysqli_query($conn, $getEmployeeID);
    $employeeno = 0;
    while($row = mysqli_fetch_array($result)){
        $employeeno = $row['employeeid'];
    }

    $sql = "INSERT INTO stylist(employeenumber) VALUES ('$employeeno')";

    header("Content-Type: JSON");
    if (mysqli_query($conn, $sql)) {

        echo json_encode("New Stylist added successfully!", JSON_PRETTY_PRINT);

        $output = array();

        array_push($output, $employeeno);

        echo json_encode($output, JSON_PRETTY_PRINT);

    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>
