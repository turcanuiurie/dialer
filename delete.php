<?php
//index.php
include('db.php');
$result = mysql_query("SELECT * FROM Campaign");
echo "<table border='2' >
<tr>
<th><u>ID</th>
<th><u>CampaignName</th>
<th><u>LastIdDial</th>
<th><u>MaxCalls</th>
<th><u>destination</th>
</tr>";

while($row= mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ID']. "</td>";
echo "<td>" . $row['CampaignName'] . "</td>";
echo "<td>" . $row['LastIdDial'] . "</td>";
echo "<td>" . $row['MaxCalls'] . "</td>";
echo "<td>" . $row['destination'] . "</td>";
echo "<td><a href=\"delete.php?id=".$row['id']."\">delete</a></td>";

echo "</tr>";
}
echo "</table>";
?>

<?php