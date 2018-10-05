<?php
include("header.php");

include("connect.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
h1
{
	    text-align: center;
    font-family: serif;
    font-size: 50px;
}
.brdiv{
	overflow:auto;
    height: 460px;
    width: auto;
}
</style>
</head>

<body style="background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);s">

<h1>News</h1>
<?php
$id=$_GET['id'];
$qry="select * from git_news where id='$id'";
$result=mysql_query($qry,$con);
echo "<div class='brdiv'>";
echo "<table width='100%'>";
while($row=mysql_fetch_array($result))
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

</form>
<div>";
$id = $_GET['id'];
if(empty($id))
	header('Location: news.php');
else
{
	
	$query = mysql_query("SELECT * FROM git_newscomments WHERE link = '$id' ORDER BY id DESC");
	if (mysql_num_rows($query) == 0)
		echo 'Be the first to add a comment.<br />';
	else
	{
		while($output = mysql_fetch_assoc($query))
		{
			echo $output['subject'].'<br />';
			echo $output['comment'].'<br />';
			echo $output['date'].'<br />';
			echo '<em>Posted by ~ '.$output['name'].'</em><hr />';
		}
	} 

 }
 echo "
</div>

	
	
	
		</td>
		  </tr>
  	";
						
}
echo "</table>";
	echo "</div>";
?>
</body>
</html>