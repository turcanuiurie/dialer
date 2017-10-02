<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: index.php");
}else{ //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
}



$q=$_GET['q'];
require_once("config.php");
// $con = mysql_connect('localhost', 'dialeruser', 'dialerpass');
$con = mysql_connect($host,$user,$pass);
 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
mysql_select_db($db, $con);
// mysql_select_db("dialerdb", $con);

 $sql="DELETE FROM Campaign WHERE CampaignName = '".$q."'";
 $result = mysql_query($sql);

 header("Location: getcdata.php")

?>
