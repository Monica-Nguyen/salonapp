<<<<<<< HEAD
<<<<<<< HEAD
<?php 

include 'employee.php';
include '../../backend/database.php';
include '../../logic/logic.php';
?>

<!DOCTYPE HTML>
<html>
Add a Service:
<head>
  <title>Services</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addServiceLogic.php" method="POST">
  <table>
   <tr>
    <td>Service: </td>
    <td>
      <input type="text" name="serviceOffered" required>
    </td>
   </tr>
   <tr>
    <td>Cost: </td>
    <td>
      <input type="text" name="serviceCost" required>
    </td>
   </tr>
   <tr>
   <tr>
    <td>Equipment To Be Used: </td>
    <td>
      <select name="equipmentName"> 
        <?php include 'getEquipmentNames.php'?>
      </select>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="SubmitButton"></td>
   </tr>
   
  </table>
</form>

</body>
=======
<?php 

include '../admin/admin.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';
?>

<!DOCTYPE HTML>
<html>
Add a Service:
<head>
  <title>Services</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addServiceLogic.php" method="POST">
  <table>
   <tr>
    <td>Service: </td>
    <td>
      <input type="text" name="serviceOffered" required>
    </td>
   </tr>
   <tr>
    <td>Cost: </td>
    <td>
      <input type="text" name="serviceCost" required>
    </td>
   </tr>
   <tr>
   <tr>
    <td>Equipment To Be Used: </td>
    <td>
      <select name="equipmentName"> 
        <?php include 'getEquipmentNames.php'?>
      </select>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="SubmitButton"></td>
   </tr>
   
  </table>
</form>

</body>
>>>>>>> 920930dd82018c9d9bf93bce8c433f5d1e5566f7
=======
<?php 

include '../admin/admin.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';
?>

<!DOCTYPE HTML>
<html>
Add a Service:
<head>
  <title>Services</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addServiceLogic.php" method="POST">
  <table>
   <tr>
    <td>Service: </td>
    <td>
      <input type="text" name="serviceOffered" required>
    </td>
   </tr>
   <tr>
    <td>Cost: </td>
    <td>
      <input type="text" name="serviceCost" required>
    </td>
   </tr>
   <tr>
   <tr>
    <td>Equipment To Be Used: </td>
    <td>
      <select name="equipmentName"> 
        <?php include 'getEquipmentNames.php'?>
      </select>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="SubmitButton"></td>
   </tr>
   
  </table>
</form>

</body>
>>>>>>> 920930dd82018c9d9bf93bce8c433f5d1e5566f7
</html>