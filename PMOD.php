<?php require_once('connection.php');?>

<html>
 <head>
   <title>Modify Employee Profile</title>
<link rel="stylesheet" href="style.css" class="stylesheet">
 </head> 
 <body>
  <div class="conntainer">
    <table class="">
    <!-- mod query  -->
        <?php
        $rnooo=trim($_GET["rno"]);
        $rs1=mysql_query("SELECT * from employetable where pno='".$rnooo."'");
        $sno=1;
        while( $row=mysql_fetch_array($rs1)) {
        echo "<form name=fdadd method=post action=padd.php>";
        echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
        echo "<tr><td>Employee ID</td><td><input type=text name=id size=30 class=search-tag maxlength=30 value='".$row[1]."'></td></tr>";
        echo "<tr><td>Employee Name</td><td><input type=text name=fname class=search-tag size=30 maxlength=30  value='".$row[2]."'></td></tr>";
        echo "<tr><td>Employee Department</td><td><input type=text name=dept class=search-tag size=30 maxlength=30  value='".$row[3]."'></td></tr>";
        echo "</table></td></tr>";
        echo "<tr><td colspan=2 align=center><input type=hidden name=rno value=".$rnooo."> <input type=submit class=add-submit value=Submit></td></tr> ";
        echo "</form>";
        $sno++;
        }
        if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
        Not Found</font></td></tr>";
      ?>
       
        <?php require_once('pdel.php');?>
    </table>
</div>
</body>
</html> 


