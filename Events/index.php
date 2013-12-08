<?php
set_include_path('./php-includes');

// Create Connection

require_once 'connect.inc.php';

// Read Contents of Events Table

$sql = "SELECT * FROM `events` ORDER BY `id`";

// Output the Contents in an HTML Table

$result = $db->query($sql);

?>

<table border="1" cellpadding="2" cellspacing="3">
	<tr>
		<th>ID</th>
		<th>Title</th>
	</tr>
	
	<?php
	
	while ($row=$result->fetch_object()) {
		$id = $row->id;
		$title = htmlentities($row->title, ENT_QUOTES, "UTF-8");
	?>
	
	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $title; ?></td>
	</tr>

	<?php
	
	}
	
	?>
	
</table>
