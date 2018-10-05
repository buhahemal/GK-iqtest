<?php
include("connect.php");
$submit="";
session_start();
extract($_POST);
extract($_SESSION);
if(!isset($_SESSION['qn']))
{
		$_SESSION['qn']=0;
}
else if($submit=='Next Question' )
{
	$_SESSION['qn']=$_SESSION['qn']+1;
	
}
if($submit=='Finish')
{
	unset($_SESSION['qn']);
	unset($_SESSION['tid']);
	header("location:index.php");
}
$rs=mysql_query("select * from ".$_SESSION['tid']."",$con) or die(mysql_error());
mysql_data_seek($rs,$_SESSION['qn']);
$row= mysql_fetch_row($rs);
echo "<div class='conten'>";
			echo "<table style='height: 55%;width: 50%;' class='table-borderless tsty'>"; 
echo "<form name=myfm method=post action=review.php>";
$n=$_SESSION['qn']+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[1]</style></td></tr>";
echo "<tr><td class=".($row[6]==1?'tans':'style8').">$row[2]</td></tr>";
echo "<tr><td class=".($row[6]==2?'tans':'style8').">$row[3]</td></tr>";
echo "<tr><td class=".($row[6]==3?'tans':'style8').">$row[4]</td></tr>";
echo "<tr><td class=".($row[6]==4?'tans':'style8').">$row[5]</td></tr>";
if($_SESSION['qn']<mysql_num_rows($rs)-1)
echo "<tr><td><input type=submit class='btn btn-secondary'  name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit class='btn btn-outline-success' value='Finish'></form>";

echo "</table></table>";

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
.back
{
	background-color: #924e2666
}
.style8 {
	text-decoration: line-through;
	font-weight: bold;
}
.conten{
	            font-family: sans-serif;
    margin-top: 199px;
    margin-left: 285px;
    margin-right: 20%;
}
.tsty{
	    height: 55%;
    width: 50%;
    margin-left: 31px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gk-Iqtest/Review Question</title>
</head>

<body class="back">
</body>
</html>