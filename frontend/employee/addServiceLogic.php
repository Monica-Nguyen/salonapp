<<<<<<< HEAD
<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $serviceOffered = $_POST['serviceOffered'];
    $serviceCost = $_POST['serviceCost'];
    $equipmentName = $_POST['equipmentName'];

    $getEquipmentID = "SELECT equipmentid FROM equipment where name ='".$equipmentName."'";
    $result = mysqli_query($conn, $getEquipmentID);
    $equipmentno = 0;
    while($row = mysqli_fetch_array($result)){
        $equipmentno = $row['equipmentid'];
    }


    $sql = "INSERT INTO service(servicename, cost, equipmentno) VALUES ('$serviceOffered', '$serviceCost', '$equipmentno')";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("New service added successfully!", JSON_PRETTY_PRINT);


    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

=======
<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $serviceOffered = $_POST['serviceOffered'];
    $serviceCost = $_POST['serviceCost'];
    $equipmentName = $_POST['equipmentName'];

    $getEquipmentID = "SELECT equipmentid FROM equipment where name ='".$equipmentName."'";
    $result = mysqli_query($conn, $getEquipmentID);
    $equipmentno = 0;
    while($row = mysqli_fetch_array($result)){
        $equipmentno = $row['equipmentid'];
    }


    $sql = "INSERT INTO service(servicename, cost, equipmentno) VALUES ('$serviceOffered', '$serviceCost', '$equipmentno')";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("New service added successfully!", JSON_PRETTY_PRINT);


    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);

>>>>>>> 920930dd82018c9d9bf93bce8c433f5d1e5566f7
?>