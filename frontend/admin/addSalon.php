
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../styles.css">
    </head>

<body>


<div class="sidebar">
    <header>
        <h1>Admin</h1>
        <h2>Manage Salons and Employees</h2>
    </header>
    
    <ul>
        <li><a href="manageSalons.php" class="a"><i class="fa fa-home fa-2x"></i>Salons</a></li>
        <li><a href="manageEmployees.php" class="b"><i class="fa fa-user fa-2x"></i>Employees</a></li>
    </ul>

    <div class="other-info">
    <ul><a class= "salonapp"><i class="fa fa-copyright"></i> salonapp</a></ul>
    </div>

</div>

<div class="main-content">
    <div class="header"> 

    All Salons:  <br></br>

    <?php

    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();
    $result = getSalons($conn);

    header("Content-Type: JSON");
    $rowNumber = 0;
    $output = array();

    while($row = mysqli_fetch_array($result)){
        $output[$rowNumber]['salonid'] = $row['salonid'];
        $output[$rowNumber]['phone'] = $row['phone'];
        $output[$rowNumber]['email'] = $row['email'];
        $output[$rowNumber]['name'] = $row['name'];
        $output[$rowNumber]['address'] = $row['address'];
        $output[$rowNumber]['postalcode'] = $row['postalcode'];
        $output[$rowNumber]['city'] = $row['city'];
        $output[$rowNumber]['stateorprovince'] = $row['stateorprovince'];
        $output[$rowNumber]['country'] = $row['country'];
        $rowNumber++;
    }

    echo '<pre>'; print_r($output); echo '</pre>';

?>

    </div>
    <div class="info"> </div>
</div>


</body>
</html>

