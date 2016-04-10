<?php
include_once('dbconnection.php');

echo '<table border="1" id="table_id" >';
echo '<tr>';
$th_array = array('Id','Name', 'Email','Phone', 'Marks');
$count_th_array = count($th_array);
foreach ($th_array as $th_element) {
	echo "<td>$th_element</td>";
}
echo '</tr>';
$db_object = new db_connection();
$display_all_data = $db_object->displayData();
foreach ($display_all_data as $display_data) {
	echo '<tr>';
	echo '<td>'.$display_data['id'].'</td>';
	echo '<td>'.$display_data['name'].'</td>';
	echo '<td>'.$display_data['email'].'</td>';
	echo '<td>'.$display_data['phone'].'</td>';
	echo '<td>'.$display_data['marks'].'</td>';
	echo '</tr>';
}

echo '</table>';


$data = array()
?>