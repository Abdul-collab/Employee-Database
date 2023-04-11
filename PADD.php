<?php include('connection.php');?>
<!-- Add Query -->
<?php
$id=trim($_POST["id"]);
$fname=trim($_POST["fname"]);
$addr=trim($_POST["addr"]);
$dept=trim($_POST["dept"]);
if ($id=="") { $error=1; echo "<tr><td><font color=white size=4></font></td></tr>"; }
if ($fname=="") { $error=1; echo "<tr><td></td></tr>"; }
if ($dept=="") { $error=1; echo "<tr><td><font color=white size=4></font></td></tr>"; }
if ($error==0) {
 mysql_query("insert into employetable(eid,efname,elname,edept,pshow) values('".$id."','".$addr."','".$fname."','".$dept."','Y')");
}
?>

<html>
 <head>
  <title>Add New Employee</title>
  <link rel="stylesheet" type="text/css" href="styles.css?version=1" />
 </head> 
<body>
    
        <div class="container">
            <form name=fdadd method=post action=padd.php>
                <tr><td><table width=750 cellspacing=0 cellpadding=5>
                <tr><td class="label">Employee ID</td><td><input type=text name=id class="search-tag" size=30 maxlength=30></td></tr>
                <tr><td class="label">Employee Name</td><td><input type=text name=fname class="search-tag" size=30 maxlength=30></td></tr>
                <tr><td class="label">Department</td><td><input type=text name=dept class="search-tag" size=30 maxlength=30></td></tr>
                </table></td></tr>
                <tr><td align=center>
                    <input type=submit class="add-submit" value=Submit></td></tr>
                    <tr><td align=center>
                    <input type=submit class="add-submit" value=Add></td></tr>
                    <tr><td align=center>
                    <input type=reset class="add-submit" value=Reset></td></tr>
                </table>
            </form>
        
    </div>
</body>
</html>
<?php require_once('pdel.php');?>





