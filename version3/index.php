<?php
include_once('dbconnection.php');

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="ajax_file.js"></script>

<form id="form" name="form">
	<input type="text" name="name" id="name" placeholder="Your Name"><br>
	<input type="email" name="email" id="email" placeholder="Email"><br>
	<input type="text" name="phone" id="phone" placeholder="Phone Number"><br>
	<input type="text" name="marks" id="marks" placeholder="Marks"><br>
	<input id="submit" onclick="submitDataFunction()" type="button" value="Submit">
</form>

<?php
// display data
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
	foreach ($display_data as $table_column=>$table_row_value) {
		echo '<td>'.$display_data[$table_column].'</td>';
	}
	echo '</tr>';
}
echo '<tr id="appended_data"></tr>';
echo '</table>';

?>