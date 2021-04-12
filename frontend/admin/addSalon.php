<?php 

include 'admin.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();
$result = getSalons($conn);

if(isset($_POST['SubmitButton'])){
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $postalcode = $_POST['postalcode'];
    $city = $_POST['city'];
    $stateorprovince = $_POST['stateorprovince'];
    $country = $_POST['country'];

    $sql = "INSERT INTO salon(phone, email, name, address, postalcode, city, stateorprovince, country) VALUES ('$phone', '$email', '$name', '$address', '$postalcode', '$city', '$stateorprovince', '$country')";

    if (mysqli_query($conn, $sql)) {
      echo "New salon added successfully!<br>";

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
  
      echo json_encode($output, JSON_PRETTY_PRINT);


    } else {
      echo "Error: " . $result . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>

<!DOCTYPE HTML>
<html>
Add a Salon:
<head>
  <br>
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
    <td><input type="email" name="email" required></td>
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