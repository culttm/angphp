<?php

require_once 'db.php'; // The mysql database connection script
$id = $_POST['postId'];
$votes = $_POST['votes'];
$query=mysql_query("update posts set votes='$votes' where id='$id'") or die(mysql_error());