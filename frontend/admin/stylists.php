<?php
include '../../backend/database.php';
include 'admin.php'; 

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<form action="addStylist.php"><tr>
<td><input type="submit" value="Add a Stylist" name="addSalon"></td>
</tr></form>

<br><br><br><br><br><br><br><br><br><br><br><br><br>

<form action="getStylist.php" method = "GET"><tr>
<td><input type="submit" value="View All Stylists" name="getSalons"></td>
</tr></form>    

<br><br><br><br><br><br><br><br><br><br><br><br><br>

<form action="deleteStylist.php"><tr>
<td><input type="submit" value="Delete Stylist" name="deleteSalons"></td>
</tr></form>    

<br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- <form action="editSalon.php"><tr>
<td><input type="submit" value="Edit Salon" name="editSalons"></td>
</tr></form>     -->