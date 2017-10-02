<?php

if(isset($_POST['name']))
	{
	  $name = $_POST['name'];
 
	  if(mysql_query("INSERT INTO dialerdb VALUES('','$name')"))
		echo "Successful Insertion!";
	  else
		echo "Please try again";
	}
 
 
	$res = mysql_query("SELECT * FROM dialerdb");
 
 
?>
<html>
<head>
 
<style type="text/css">
 li { list-style-type: none; display: inline; padding: 10px; text-align: center;}
// li:hover { background-color: yellow; }
</style>
 
</head>
<body>
<form action="." method="POST">
Name: <input type="text" name="name"/><br />
<input type="submit" value=" Enter "/>
</form>
 
<h1>List of companies ..</h1>
<ul>
< ?php
	while( $row = mysql_fetch_array($res) )
	  echo "<li>$row[id]. <li>$row[name]</li> 
                <li><a href='delete.php?del=$row[id]'>delete</a></li><br />";
?>
</ul>
<?php
include 'db.php';
?>


</body>
</html>

