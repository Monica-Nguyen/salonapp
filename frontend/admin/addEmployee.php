<?php 

include 'admin.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();

if(isset($_POST['SubmitButton'])){
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $postalcode = $_POST['postalcode'];
    $city = $_POST['city'];
    $stateorprovince = $_POST['stateorprovince'];
    $country = $_POST['country'];

    $sql = "INSERT INTO employee(idsalon, firstname, lastname, phone, email, address, postalcode, city, stateorprovince, country) VALUES ('$idsalon', '$firstname', '$lastname', '$phone', '$email', '$address', '$postalcode', '$city', '$stateorprovince', '$country')";

    if (mysqli_query($conn, $sql)) {
      echo "New salon added successfully!<br>";

      $result = getEmployees($conn);

      header("Content-Type: JSON");
      $rowNumber = 0;
      $output = array();
  
      while($row = mysqli_fetch_array($result)){
          $output[$rowNumber]['employeeid'] = $row['employeeid'];
          $output[$rowNumber]['idsalon'] = $row['idsalon'];
          $output[$rowNumber]['firstname'] = $row['firstname'];
          $output[$rowNumber]['lastname'] = $row['lastname'];
          $output[$rowNumber]['phone'] = $row['phone'];
          $output[$rowNumber]['email'] = $row['email'];
          $output[$rowNumber]['address'] = $row['address'];
          $output[$rowNumber]['postalcode'] = $row['postalcode'];
          $output[$rowNumber]['city'] = $row['city'];
          $output[$rowNumber]['stateorprovince'] = $row['stateorprovince'];
          $output[$rowNumber]['country'] = $row['country'];
          $rowNumber++;
      }
  
      echo json_encode($output, JSON_PRETTY_PRINT);

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE HTML>
<html>
Add an Employee:
<head>
  <title>Register Form</title>
  <link rel="shortcut icon" href="#">
</head>
<body>
  
 <form action="addSalon.php" method="POST">
  <table>
   <tr>
    <td>Salon Name : </td>
    <td><input type="text" name="name" required></td>
   </tr>
   <tr>
    <td>Phone Number : </td>
    <td><input type="tel" name="phone" placeholder = "xxx xxx xxxx" pattern= "[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12" title = "10 digits required." required></td>
   </tr>
   <tr>
    <td>Email : </td>
    <td><input type="email" name="email"></td>
   </tr> 
   <tr>
    <td>Address : </td>
    <td><input type="text" name="address" required></td>
   </tr>
   <tr>
    <td>Postal Code : </td>
    <td><input type="text" name="postalcode" required></td>
   </tr>
   <tr>
    <td>City : </td>
    <td><input type="text" name="city" required></td>
   </tr>
   <tr>
    <td>State/Province : </td>
    <td><input type="text" name="stateorprovince" required></td>
   </tr>
   <tr>
    <td>Country : </td>
    <td><input type="text" name="country" required></td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="SubmitButton"></td>
    </tr>

  </table>
</form>

</body>
</html>

