<?php

require_once 'db.php'; // The mysql database connection script

if(isset($_POST['postId'])){
	$postID = $_POST['postId'];
	$query=mysql_query("DELETE FROM posts WHERE id='$postID'") or die(mysql_error());
}

 