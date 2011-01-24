<?php
mysql_connect('localhost', 'luxury', 'luxury');
mysql_select_db('boards');

$username = $_POST['username'];
$content = $_POST['content'];

$query = "INSERT INTO board (name, content) VALUES ('$username', '$content')";

mysql_query($query) or die(mysql_error());
?>