<?php
require 'dbconnection.php';
include 'AddnListLink.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="jquery-1.2.6.js"></script>
<script type="text/javascript" src="jquery.tablesorter.js"></script>
<script type="text/javascript" src="myTableCode.js"></script>
<script>

	$(document).ready(function(){
		$("#studentName").click(function(){
			$("#studentName").html('Student Name ^');
		});
	});

</script>
  
<table border="1" class="sort">
	<tr>
		<td><a id="studentName">Student Name</a></td>
		<td>Roll No</td>
		<td>Class</td>
		<td>Phone</td>
		<td>Email</td>
		<td>Gender</td>
		<td>Active</td>
	</tr>
	<?php
	$sort = 'ASC';
	if(!empty($_GET['sort'])) {
		$sort = $_GET['sort'];
	}
	$sql = "SELECT * FROM Students order by sname ".$sort;
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
	
</table>




