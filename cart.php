<?php
$con=mysqli_connect("localhost","root","","plant");
$Plant_Name=$_POST['Plant_Name'];
$cost=$_POST['cost'];
$quantity=$_POST['quantity'];
$Total_cost=$_POST['Total_cost'];
if(!$con)
{
	die('error in connection'.mysql_error());
}
$result=mysqli_query($con,"INSERT INTO cart(Plant_Name,cost,quantity,Total_cost)VALUES('$Plant_Name','$cost','$quantity','$Total_cost')");
$result1=mysqli_query($con,"SELECT * FROM cart");

echo"<table border='1'>
<tr>
	<th>PLANT NAME</th>
	<th>COST</th>
	<th>Quantity</th>
	<th>TOTAL COST</th>
</tr>";
while($row=mysqli_fetch_array($result1))
{
	echo "<tr>";
	echo "<td>" .$row['Plant_Name']. "</td>";
	echo "<td>" .$row['cost']. "</td>";
	echo "<td>" .$row['quantity']. "</td>";
	echo "<td>" .$row['Total_cost']. "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>