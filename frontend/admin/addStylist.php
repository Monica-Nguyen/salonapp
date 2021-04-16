<?php 

include 'admin.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';
?>


<!DOCTYPE HTML>
<html>
Add a Stylist:
<head>
  <title>Register Form</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addStylistLogic.php" method="POST">
  <table>

   <tr>
    <td>Employee Number : </td>
    <td><input type="int" name="employeenumber" required></td>
   </tr>
   <tr>
   <tr>
    <td><input type="submit" value="Submit" name="SubmitButton"></td>
    </tr>

  </table>
</form>

</body>
</html>

