<html>
    <head>
        <meta charset="utf-8">
        <title>Employee</title>
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../styles.css">
    </head>

<body>


<div class="sidebar">
    <header>
        <h1>Employee</h1>
        <h2>Manage Clients, Client Info, Appointments, Services & Equipment</h2>
    </header>
    
    <ul>
        
        <li><a href="clients.php" class="a"><i class="fa fa-user fa-2x"></i>Clients</a></li>
        <li><a href="clientInfo.php" class="b"><i class="fa fa-envelope fa-2x"></i>Client Info</a></li>
        <li><a href="appointments.php" class="c"><i class="fa fa-calendar fa-2x"></i>Appointments</a></li>
        <li><a href="services.php" class="d"><i class="fa fa-home fa-2x"></i>Services</a></li>
        <li><a href="equipment.php" class= "e"><i class="fa fa-scissors fa-2x"></i>Equipment</a></li>
    </ul>

    <div class="other-info">
    <ul><a class= "salonapp"><i class="fa fa-copyright"></i> salonapp</a></ul>
    </div>

</div>

<div class="main-content">
    <div class="header"> 
    <br></br>All Equipment:<br></br>

    <?php

    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();
    $result = getServices($conn);

    header("Content-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['serviceid'] = $row['serviceid'];
        $output[$rowNumber]['haircut'] = $row['haircut'];
        $output[$rowNumber]['updo'] = $row['updo'];
        $output[$rowNumber]['perm'] = $row['perm'];
        $output[$rowNumber]['shampoo'] = $row['shampoo'];
        $output[$rowNumber]['styling'] = $row['styling'];
        $output[$rowNumber]['color'] = $row['color'];
        $output[$rowNumber]['cost'] = $row['cost'];
        $output[$rowNumber]['equipmentno'] = $row['equipmentno'];
        
        $rowNumber++;
    }

    echo '<pre>'; print_r($output); echo '</pre>';

?>
    </div>
    <div class="info">
    <!-- text here -->
    </div>
</div>


</body>
</html>

