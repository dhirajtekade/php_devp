<?php
require 'dbconnection.php';
include 'AddnListLink.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="jquery.tablesorter.js"></script> 

<script>
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
</script>
  
<table id="myTable" class="tablesorter">
	<thead>
	<tr>
		<th>Student Name</th>
		<th>Roll No</th>
		<th>Class</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Active</th>
	</tr>
	</thead>
	<tbody>
	<?php
	
	$sql = "SELECT * FROM Students";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)) {
		echo '<tr>';
		echo '<td>'.$row['sname'].'</td>';
		echo '<td>'.$row['roll'].'</td>';
		echo '<td>'.$row['class'].'</td>';
		echo '<td>'.$row['phone'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['gender'].'</td>';
		echo '<td>'.$row['isActive'].'</td>';
		echo '</tr>';
	}
	?>
	</tbody>
</table>




