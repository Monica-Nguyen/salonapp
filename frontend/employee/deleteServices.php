<?php 

include 'employee.php'; 
include '../../backend/database.php';
include '../../logic/logic.php';

$conn = connect();

$result = mysqli_query($conn,"SELECT * FROM service");
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Service</title>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;

}
th, td {
  padding: 5px;
}
th {
  text-align: left;
}

</style>

</head>
<body>
<table>
	<tr>
	<td>Service ID</td>
	<td>Hair Cut</td>
    <td>Updo</td>
	<td>Perm</td>
	<td>Shampoo</td>
	<td>Styling</td>
	<td>Color</td>
    <td>Cost</td>
    <td>Equipment No.</td>
	</tr>
	<?php

	$i=0;

	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["serviceid"]; ?></td>
	<td><?php echo $row["haircut"]; ?></td>
	<td><?php echo $row["updo"]; ?></td>
	<td><?php echo $row["perm"]; ?></td>
	<td><?php echo $row["shampoo"]; ?></td>
    <td><?php echo $row["styling"]; ?></td>
    <td><?php echo $row["color"]; ?></td>
    <td><?php echo $row["cost"]; ?></td>
    <td><?php echo $row["equipmentno"]; ?></td>
	<td><a href="deleteServicesLogic.php?serviceid=<?php echo $row["serviceid"]; ?>">Delete</a></td>
	</tr>
	<?php

	$i++;
	}
	?>



</table>
</body>
</html>
