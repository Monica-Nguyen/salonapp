<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $salonName = $_POST['salonName'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $postalcode = $_POST['postalcode'];
    $city = $_POST['city'];
    $stateorprovince = $_POST['stateorprovince'];
    $country = $_POST['country'];

    $getSalonID = "SELECT salonid FROM salon where name='".$salonName."'";
    $result = mysqli_query($conn, $getSalonID);
    $idsalon = 0;
    while($row = mysqli_fetch_array($result)){
        $idsalon = $row['salonid'];
    }
    

    $sql = "INSERT INTO employee(idsalon, firstname, lastname, phone, email, address, postalcode, city, stateorprovince, country) VALUES ('$idsalon', '$firstname', '$lastname', '$phone', '$email', '$address', '$postalcode', '$city', '$stateorprovince', '$country')";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("New employee added successfully!", JSON_PRETTY_PRINT);

        $output = array();

        array_push($output, $idsalon, $firstname, $lastname, $phone, $email,$address, $postalcode, $city, $stateorprovince, $country);

        echo json_encode($output, JSON_PRETTY_PRINT);

    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>