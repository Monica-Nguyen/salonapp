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
    $discount = $_POST['discount'];

    $getSalonID = "SELECT salonid FROM salon where name='".$salonName."'";
    $result = mysqli_query($conn, $getSalonID);
    $salonno = 0;
    while($row = mysqli_fetch_array($result)){
        $salonno = $row['salonid'];
    }
    

    $sql = "INSERT INTO client(salonno, phone, firstname, lastname, email, address, postalcode, city, stateorprovince, country, discount) VALUES ('$salonno', '$phone', '$firstname', '$lastname', '$email', '$address', '$postalcode', '$city', '$stateorprovince', '$country', '$discount')";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("Client added successfully!", JSON_PRETTY_PRINT);
    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>