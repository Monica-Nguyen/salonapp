<?php 

include 'employee.php';
include '../../backend/database.php';
include '../../logic/logic.php';
?>


<!DOCTYPE HTML>
<html>
Add Equipment:
<head>
  <title>Clients</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addEquipmentLogic.php" method="POST">
  <table>
   <tr>
    <td>Equipment Description: </td>
    <td>
      <input type="text" name="equipmentName" required>
    </td>
   </tr>
   <tr>
    <td>Employee First Name: </td>
    <td>
      <input type="text" name="firstname" required>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="SubmitButton"></td>
    </tr>

  </table>
</form>

</body>
</html>

