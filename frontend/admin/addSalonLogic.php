<?php
include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();

$phone = $_POST['phone'];
$email = $_POST['email'];
$name = $_POST['name'];
$address = $_POST['address'];
$postalcode = $_POST['postalcode'];
$city = $_POST['city'];
$stateorprovince = $_POST['stateorprovince'];
$country = $_POST['country'];

$sql = "INSERT INTO salon(phone, email, name, address, postalcode, city, stateorprovince, country) VALUES ('$phone', '$email', '$name', '$address', '$postalcode', '$city', '$stateorprovince', '$country')";

if (mysqli_query($conn, $sql)) {
    echo "New salon added successfully!\n";
    header("Content-Type: JSON");

    $output = array();

    array_push($output, $phone, $email, $name, $address, $postalcode, $city, $stateorprovince, $country);
        

    echo json_encode($output, JSON_PRETTY_PRINT);


} else {
    echo "Error: ". mysqli_error($conn);
}

mysqli_close($conn);

?>