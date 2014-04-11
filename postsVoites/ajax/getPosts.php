<?php

require_once 'db.php'; // The mysql database connection script
$id = '%';
if(isset($_GET['ID'])){
$id = $_GET['ID'];
}
$query=mysql_query("select id, title, description, created, votes from posts") or die(mysql_error());





 
# Collect the results
while($obj = mysql_fetch_object($query)) {
 $arr[] = $obj;
}
 
# JSON-encode the response
echo $json_response = json_encode($arr);