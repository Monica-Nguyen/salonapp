<?php 

include 'admin.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';

?>


<!DOCTYPE HTML>
<html>
Delete an Employee:
<head>
  <title>Register Form</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="deleteEmployeeLogic.php" method="POST">
  <table>
   <tr>
    <td>Employee ID: </td>
    <td>
      <input type="number" name="employeeid" required>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="SubmitButton"></td>
    </tr>

  </table>
</form>

</body>
</html>


