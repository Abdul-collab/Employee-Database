<?php require('connection.php');?>

<!-- mod query  -->
<?php
$rnooo=trim($_GET["rno"]);
$rs1=mysql_query("DELETE * from employetable where pno='.$rnooo.'");
// mysql_query("DELETE FROM `employetable` WHERE pshow='N'");


?>

<!-- Add Query -->
<html>
 <head>
  <title>Update Employee</title>
  <link rel="stylesheet" href="style.css" class="style css">
 </head> 
<body>
<div class="container">
    <form name=fdadd method=post action=padd.php>
    <tr><td><table width=750 cellspacing=0 cellpadding=5>
    <tr><td>Employee ID</td><td><input type=text name=id class="search-tag" size=30 maxlength=30></td></tr>
    <tr><td>Employee First Name</td><td><input type=text class="search-tag" name=addr size=30 maxlength=30></td></tr>
    <tr><td>Employee Last Name</td><td><input type=text class="search-tag" name=fname size=30 maxlength=30></td></tr>
    <tr><td>Employee Department</td><td><input type=text class="search-tag" name=dept size=30 maxlength=30></td></tr>
    </table></td></tr>
    <tr><td align=center>
                    <input type=submit class="add-submit" value=Submit></td></tr>
                    <tr><td align=center>
                    <input type=submit class="add-submit" value=Add></td></tr>
                    <tr><td align=center>
                    <input type=reset class="add-submit" value=Reset></td></tr>
    </form>
    </table>
</div>
</body>
</html>

<?php require_once('pdel.php');?>