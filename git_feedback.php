<?php
	 include("header.php");
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<style>
	body,html{
	height:100%;
	background: linear-gradient(#1A2980,#26D0CE);
	}
	table
	{
		-webkit-box-shadow: 15px 15px 37px 0px rgba(0,0,0,0.65);
-moz-box-shadow: 15px 15px 37px 0px rgba(0,0,0,0.65);
box-shadow: 15px 15px 37px 0px rgba(0,0,0,0.65);
border-radius:40px;
	}
	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>GK-IQTEST/FeedBack</title>
</head>

<body>
		<div align="center" style="margin-top:150px">
 			<form name="form1" action="index.php" method="post">
				<table bgcolor="white" width="335" height="285" cellspacing="2" >
                    <tr>
                    	<td colspan="2" align="center">
                   			 Feedback Form
                   		 </td>
                    </tr>
                    <tr>
                    	<td align="center">
                    Name :-
                    	</td>
                   		 <td align="center">
                    		<input type="text" name="feed_nm" style="    border-radius: 40px;" placeholder="Enter Your Name" />
                    	</td>
                    </tr>
                    <tr>
                    	<td height="46" align="center">Address :-</td>
                    	<td align="center"><textarea name="feed_add" placeholder="Enter Your Address" ></textarea>
                    	</td>
                    </tr>
                    <tr>
                    	<td align="center">
                    City :-
                    	</td>
                    	<td align="center">
                     <input type="text" name=="feed_city" placeholder="Enter Your City" /> </td>
                    </tr>
                    <tr>
                    	<td align="center">
                    E-mail :-
                   		 </td>
                    <td align="center">
                    <input type="text" name="feed_mail" placeholder="Enter Your ID" />
                   		 </td>
                    </tr>
                    
                    <tr>
                    	<td height="28" align="center">
                    Mobile :-
                   		 </td>
                    <td align="center">
                    <input type="text" name="feed_no" placeholder="Enter Your ID" />
                    </td>
                    </tr>
                    <tr>
                   		 <td height="51" align="center">
                    Description :-
                   		 </td>
                    <td align="center"> <textarea name="feed_desc" placeholder="Write Your Description Here!!" ></textarea>
                    </td>
                    <tr>
                    <td height="31" colspan="2" align="center">
                    <input type="submit" name="submit" value="Submit" onclick="validateForm()" />
                    <input type="submit" name="can" value="Cancel"  /></td>
                    </tr>
                    </table>
			</form>
		</div>
</body>
</html>
<?php
include("connect.php");
	if(isset($_REQUEST["submit"]))
	{
		$fnm=$_POST["feed_nm"];
		$fadd=$_POST["feed_add"];
		$fcity=$_POST["feed_city"];
		$fmail=$_POST["feed_mail"];
		$fmob=$_POST["feed_no"];
		$fdisc=$_POST["feed_desc"];
		$qry="insert into git_feedback 			values('$fnm','$fadd','$fcity','$fmail','$fmob','$fdisc')";
		$re=mysql_query($qry,$con);
	
	if($re)
	{
		echo "Thanks!!!!!";
	}
	else
	{
		echo "Plz try again";
	}
	}
	if(isset($_REQUEST["can"]))
	{
		header("location:index.php");
	}
?>
<script type="text/javascript">
	function validateForm()
	{
			if(document.form1.feed_nm.value=="")
			{
			document.form1.feed_nm.focus();
			alert("Plese Enter Your name");
			}
			if(document.form1.feed_add.value=="")
			{
			document.form1.feed_add.focus();
			alert("Plese Enter Your Address");
			}
			if(document.form1.feed_city.value=="")
			{
			document.form1.feed_city.focus();
			alert("Plese Enter Your City");
			}
			if(document.form1.feed_mail.value=="")
			{
			document.form1.feed_mail.focus();
			alert("Plese Enter Your Email Id");
			}
			if(document.form1.feed_no.value=="")
			{
			document.form1.feed_no.focus();
			alert("Plese Enter Your Mobile No");
			}
			if(document.form1.feed_desc.value=="")
			{
			document.form1.feed_desc.focus();
			alert("Plese Write The Description For Our Website ");
			}
	}
</script>
		
	