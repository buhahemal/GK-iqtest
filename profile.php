<?php
include("connect.php");
include("header.php");

session_start();
?>
<html>
<head>
<title>GK-IQTEST/PROFILE</title>
<head>
<style type="text/css">
.tbsty{
	    
    color: #000000;
    margin: 0 auto;
    text-transform: capitalize;
    text-align: center;
    table-layout: auto;
    border-style: solid;
    width: -webkit-fill-available;
    font-family: cursive;
}
body,html{
	background-image: linear-gradient(-225deg, #2CD8D5 0%, #C5C1FF 56%, #FFBAC3 100%);
	height:100%;
}
</style>
</head>

<body>
<div align="center">
<h1>Exam Result Or Score</h1>
</div>

<?php
$query1=("SELECT * FROM git_result where Name='".$_SESSION['nm']."'") or die (mysql_error());
$result1=mysql_query($query1,$con);
?>
<table border="2" class="tbsty table-borderless table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Date</th>
          <th>Type Of Exam</th>
          <th>Score</th>
          </tr>
          </thead>
          
          <?php
		  while($row1 = mysql_fetch_array($result1) or die(mysql_error()) )
{
            echo
            "<tr>
              <td>{$row1[1]}</td>
              <td>{$row1[2]}</td>
              <td>{$row1[3]}</td>
			  <td>{$row1[4]}</td>
			  </tr>";
			  
}
?>
</table>
<?php
$query=("SELECT * FROM git_user where Username='".$_SESSION['nm']."'") or die (mysql_error());
$result=mysql_query($query,$con);
?>
<div align="center">
<h1>Details</h1>
</div>
<table border="2" class=" tsty table-borderless" >
      <thead>
        <tr>
          <th>First_Name</th>
          <th>Last_Name</th>
          <th>User Name</th>
          <th>Password</th>
          <th>Address</th>
          <th>Date Of Birth</th>
          <th>State</th>
          <th>City</th>
          <th>Pin Code</th>
          <th>Email</th>
          <th>Mobile No.</th>
        </tr>
      </thead>
   <?php
while( $row = mysql_fetch_array( $result ) or die(mysql_error()) )
{
            echo
            "<tr>
              <td>{$row[1]}</td>
              <td>{$row[2]}</td>
              <td>{$row[3]}</td>
              <td>{$row[4]}</td>
              <td>{$row[5]}</td> 
			  <td>{$row[6]}</td> 
			  <td>{$row[7]}</td> 
			  <td>{$row[8]}</td> 
			  <td>{$row[9]}</td> 
			  <td>{$row[10]}</td> 
			  <td>{$row[11]}</td>
			  </tr>"; 
}
?>
</table>

</body>
</html>
