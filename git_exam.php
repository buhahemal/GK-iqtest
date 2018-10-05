<?php
	session_start();
	error_reporting(1);
	extract($_POST);
	extract($_GET);
	extract($_SESSION);
		include("connect.php");
		if(isset($id))
		{
			$_SESSION["tid"]=$id;
			header("location:git_exam.php");
		}
		if(!isset($_SESSION[tid]) && !isset($_SESSION[nm]))
		{
			header("location: index.php");
		}
?>
<html>
<head>
	<title>GK-IQTEST/EXAM</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
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
.back
{
	background-color: #924e2666
}
.result
{

    margin-top: 113px;
    font-family: inherit;
    text-align: center;
    text-transform: uppercase;
	    margin-left: 364px;
		}
</style>

<body class="back">
<?php


	$rs=mysql_query("select * from ".$_SESSION['tid']."",$con) or die(mysql_error());
		if(!isset($_SESSION['qn']))
		{
			$_SESSION['qn']=0;
			$_SESSION['trueans']=0;
			
		}
		else
		{	
		$submit;
				if($submit=='Next Question' && isset($ans))
				{
						mysql_data_seek($rs,$_SESSION['qn']);
						$row= mysql_fetch_row($rs);	
						if($ans==$row[6])
						{
									$_SESSION['trueans']=$_SESSION['trueans']+1;
						}
						$_SESSION['qn']=$_SESSION['qn']+1;
				}
				else if($submit=='Get Result' && isset($ans))
				{
						mysql_data_seek($rs,$_SESSION['qn']);
						$row= mysql_fetch_row($rs);	
						if($ans==$row[6])
						{
									$_SESSION['trueans']=$_SESSION['trueans']+1;
						}
						
						$_SESSION['qn']=$_SESSION['qn']+1;
						
						echo "<Table style=' height: 42%;width: 400px' border='5' class='table-bordered tsty result'  ><tr><td>Total Question<td> $_SESSION[qn]";
						
						echo "<tr><td>Name<td>".$_SESSION['nm'];
						
						echo "<tr><td>True Answer<td>".$_SESSION['trueans'];
						
						$w=$_SESSION['qn']-$_SESSION['trueans'];
						
						echo "<tr><td>Wrong Answer<td> ". $w;
						
						echo "</table>";
						
						$resu="INSERT INTO `git_result`(`Name`, `Date`, `Type`, `Score`) VALUES ('".$_SESSION["nm"]."',now(),'".$_SESSION["tid"]."','".$_SESSION["trueans"]."')";
						
						$r1=mysql_query($resu,$con);
						
						echo "<h1 align=center style='margin-top: 52px;text-decoration: none;'><a href=index.php>START AGAIN</a> </h1>";
						echo "<h1 align=center style='text-decoration: none;'><a href=review.php>Review Question</a> </h1>";
						unset($_SESSION['qn']);
						
						unset($_SESSION['trueans']);
						
						exit;
				}
}
			$rs=mysql_query("select * from ".$_SESSION['tid']."",$con) or die(mysql_error());
			if($_SESSION['qn']>mysql_num_rows($rs)-1)
			{
				unset($_SESSION['qn']);
				echo "<h1 class=head1>Some Error  Occured</h1>";
				session_destroy();
				echo "Please <a href=index.php> Start Again</a>";

				exit;
			}
				mysql_data_seek($rs,$_SESSION['qn']);
				$row= mysql_fetch_row($rs);
	?>
		<div class="conten">
			<form name=myfm method=post action=git_exam.php>
				<table style="height: 55%;width: 50%;" class="table-borderless tsty"> 
<?php
	$n=$_SESSION['qn']+1;

		echo "<tR><td>Question".  $n ."</td></tr>  ";
			echo "<tr><td>$row[1]</td></tr>";
			echo "<tr><td ><input type=radio name=ans value=1> $row[2]"; 
			echo "<tr><td ><input type=radio name=ans value=2> $row[3]";
			echo "<tr><td ><input type=radio name=ans value=3> $row[4]";
			echo "<tr><td ><input type=radio name=ans value=4> $row[5]";
?>
<?php
	if($_SESSION['qn']<mysql_num_rows($rs)-1)
	{
		?>
		<tr><td><input type=submit class="btn btn-secondary"  name=submit value='Next Question'></form>
	<?php

	}
	else
	{
	?>
	<tr><td><input type=submit name=submit class="btn btn-outline-success" value='Get Result'></form>
<?php
	}
?>

</body>
</html>



