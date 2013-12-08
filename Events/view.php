<?php
set_include_path('./php-includes');

// Includes

require_once 'connect.inc.php';

// Accept passed ID variable

$event_id = $_GET['id'];

// Read Entry from the Database

$sql = "SELECT * FROM table WHERE id >= $event_id";

$result = $db->query($sql); 

// Display and Single Entry View

echo $result

?>