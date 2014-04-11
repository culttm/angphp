<?php

require_once 'db.php'; // The mysql database connection script

$postTitle = $_POST['postTitle'];
$postDescription = $_POST['postDescription'];


/*$postTitle = isset( $_POST["postTitle"] ) ? $_POST["postTitle"] : '1';
$postDescription = isset( $_POST["postDescription"] ) ? $_POST["postDescription"] : '11';*/
 
$query=mysql_query("INSERT INTO posts(title, description)  VALUES ('$postTitle', '$postDescription')") or die(mysql_error());

























