<?php
	include("connect.php");
	$id = $_POST['idn'];
		if(empty($id))
			header('Location: news.php');

		else

		{
			if($_POST['submit'])
			{ 
					if (empty($_POST['name']))
						die('Enter a name.'); 
					else if (empty($_POST['subject']))
						die('Enter a subject.'); 
					else if (empty($_POST['comment']))
						die('Enter a comment.');
					$postedby = $_POST['name']; 
					$subject = $_POST['subject']; 
					$comment = $_POST['comment']; 
					if(mysql_query("INSERT INTO git_newscomments (id , link, name , subject , comment , date) VALUES ('', '$id', '$postedby', '$subject', '$comment',now())"))
					header("location:git_menunews.php");
					mysql_close(); 
			} 
		}
?>