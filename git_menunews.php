<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body,html{
	background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
	height:100%;
}
brdiv{
	overflow:auto;
    height: 460px;
    width: 65%;
}
h1
{
	    text-align: center;
    font-family: serif;
    font-size: 50px;
}

.tdimage{
	alignment-adjust:central;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GK-IQTEST/NEWS</title>
<?php
include("header.php");
?>
</head>
<body>
<?php
include("connect.php");
?>
<h1>News</h1>
<?php
$query = mysql_query('SELECT * FROM git_news ORDER BY id DESC');
echo "<div class='brdiv'>";
echo "<table width='100%'>";
	while($row=mysql_fetch_array($query))
	{
		 echo "
 			<tr>
  <td rowspan='5' width='40%'><img src='admin/$row[4]' width=200 height=200></td>
  <td> {$row[2]}</td>
  </tr>
  <tr>
  <td>{$row[3]}</td>
  </tr>
  <tr>
  <td>{$row[1]}</td>
  </tr>
  <tr>
  <td>{$row[5]}</td>
  </tr>
  <tr>
  <td>
  <form id='form1' name='form1' method='post' action='addnews.php' style='margin-left: 20px;'>
  <input type='hidden' name='idn' value=".$row['id'].">
	
	<input type='text' name='name' id='name' placeholder='Name' style='    width: 28%;
    height: 25px;
    border-radius: 14px;'/>
	
	<input type='text' name='subject' id='subject' placeholder='Subject' style='    width: 28%;
    height: 25px;
    border-radius: 14px;'/>
	
	<textarea name='comment' id='comment' placeholder='Enter Your Comment' style='    width: 47%;
    height: 31px;
    border-radius: 33px;    margin-left: 5%;
    margin-top: 1%;'></textarea><br />
	
	<input type='submit' name='submit' id='submit' value='Add Comment' style='    background-color: transparent;
    border: none;
    color: #007bff;' />
	<a href='viewnews.php?id=".$row['id']."' style='    text-decoration: none;'>View Comments</a>

</form>
	
	
	
		</td>
		  </tr>
  	<tr>
	<td colspan='2'><hr style='border-bottom-color: #d3d3d300;'></td>
	</tr>";
	}
	echo "</table>";
	echo "</div>";
?>


</body>
</html>