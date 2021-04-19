<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $serviceid = $_POST['serviceid'] ?? "";

    $sql = "DELETE FROM service WHERE serviceid='" . $_GET["serviceid"] . "'";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("Service removed successfully!", JSON_PRETTY_PRINT);

    } else {
        echo "Error deleting service record: ". mysqli_error($conn);
    }

    mysqli_close($conn);
?>
