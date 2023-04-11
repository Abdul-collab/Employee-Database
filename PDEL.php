<?php require('connection.php'); ?>

<!-- Query to Display record table -->
<html>
 <head>
  <title>Employee delete Records</title>
<link rel="stylesheet" href="style.css" class="style css">
 </head> 
 <body>
<div class="conntainer">
<!-- <tr><td><a href=padd.php>Add New Record</a></td></tr> -->
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc>
    <td align=center>S.No</td>
    <td align=center>Employee ID</td>
    <td align=center>Employee Name</td>
    <td align=center>Department</td>
    <td align=center>Options</td></tr>

<?php
$todel=$_GET['rno'];
mysql_query("DELETE FROM `employetable` where pno='$todel';");
$page=$_GET["page"];
if($page=="" || $page=="1")
{
  $page1=0; 
}
else
{
  $page1=($page*10)-10;
}
$rs1=mysql_query("SELECT * from employetable limit $page1,10");

$sno=1;
while( $row=mysql_fetch_array($rs1)) {
    echo "<tr><td>$sno</td>
          <td>$row[1]</td>
          <td>$row[2]</td>
          <td>$row[3]</td>
          <td><a href=pmod.php?rno=".$row[0].">Modify</a> | <a href=PUPDATE.php?rno=".$row[0].">Delete</a></td></tr>";
            $sno++;
}

if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>

</table>
</td></tr>
<!-- pagination code -->
<?php
$count=mysql_query("SELECT * from employetable");
$count1=mysql_num_rows($count);
$pgntn = ceil($count1/10);
for($m=1;$m<=$pgntn;$m++){
  ?><a href="PADD.php?page=<?php echo $m; ?>" style="text-decoration:none;"><tr><td></td><?php echo $m." "?></a><?php

}

?>
</div>
</body>
</html> 
