<?php
require('./config.php');

$query = "SELECT * FROM fruitshop.fruits;";
$result = mysqli_query($connection, $query);
?>