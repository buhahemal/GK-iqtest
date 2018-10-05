<?php
include("connect.php");
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

 } ?>