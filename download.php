<?php
mysql_connect("localhost","root","");
mysql_select_db("file");
$query=mysql_query("select * from upload");
$rowcount=mysql_num_rows($query);
echo $rowcount;

?>
<html>
<body>
hello
<?php
for($i=1;$i<=$rowcount;$i++)
{
	$row=mysql_fetch_array($query);
	?>
	
	<a href="upload/<?php echo $row["file"]?>"><?php echo $row["file"]?>
	</a>
	<?php
}
?>

 


</body>
</html>