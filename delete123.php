<?php
include('db.php');
$id = $_GET['ID']; //this needs to be sanitized 
if(!empty($id)){
    $result = mysql_query("DELETE FROM Campaign WHERE id=".$ID.";");
}
header("Location: index.php");
?>