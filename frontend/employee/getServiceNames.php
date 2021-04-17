<<<<<<< HEAD
<?php

    
        $conn = connect();
        $sql = "SELECT servicename FROM service";
        $result = mysqli_query($conn, $sql);
        header("Content-Type: JSON");
        $rowNumber = 0;
        $output = array();
    
        while($row = mysqli_fetch_array($result)){
            echo "<option>".$output[$rowNumber]['servicename'] = $row['servicename']."</option>";
            
            $rowNumber++;
        }
=======
<?php

    
        $conn = connect();
        $sql = "SELECT servicename FROM service";
        $result = mysqli_query($conn, $sql);
        header("Content-Type: JSON");
        $rowNumber = 0;
        $output = array();
    
        while($row = mysqli_fetch_array($result)){
            echo "<option>".$output[$rowNumber]['servicename'] = $row['servicename']."</option>";
            
            $rowNumber++;
        }
>>>>>>> 920930dd82018c9d9bf93bce8c433f5d1e5566f7
?>