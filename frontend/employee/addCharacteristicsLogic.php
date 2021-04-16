<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $clientName = $_POST['clientName'];
    $colorFormula = $_POST['colorFormula'];
    $hairLength = $_POST['hairLength'];
    $hairTexture = $_POST['hairTexture'];
    $hairStyle = $_POST['hairStyle'];
    $extraNotes = $_POST['extraNotes'];

    $getClientID = "SELECT clientid FROM client where firstname='".$clientName."'";
    $result = mysqli_query($conn, $getClientID);
    $clientno = 0;
    while($row = mysqli_fetch_array($result)){
        $clientno = $row['clientid'];
    }
    

    $sql = "INSERT INTO haircharacteristics(clientno, colorformula, length, texture, style, notes) VALUES ('$clientno', '$colorFormula', '$hairLength', '$hairTexture', '$hairStyle', '$extraNotes')";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("Hair characteristics added successfully!", JSON_PRETTY_PRINT);
    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>