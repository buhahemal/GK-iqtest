<html>
	<head>
		<title>Gk-IQTEST/Delete</title>
		<script type="text/javascript">
			function check(id)
			{
				if (confirm("Are you sure you want to delete this news item?"))
				this.location.href = "?id="+id;
			}
            </script>

	</head>
<body>
	<?php
		include("connect.php");
		if(empty($_GET['id']))

		{
			$query = mysql_query('SELECT * FROM git_news ORDER BY id DESC');
			while($output = mysql_fetch_assoc($query)) 
			echo $output['subject'].' &raquo; <a href="#" onclick="check('.$output['id'].'); return false;">Delete</a><br />';
		}
		else
		{
			$id = $_GET['id']; 
			mysql_query("DELETE FROM git_news WHERE id = $id LIMIT 1"); 
			mysql_query("DELETE FROM git_newscomments WHERE link = $id");
			echo 'News Deleted.';
		}
	?>
</body>
</html>