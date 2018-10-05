
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<title></title>
<style>
.tsty{
	    width: -webkit-fill-available;
    font-family: cursive;
    text-transform: uppercase;
}
</style>
</head>
<body>
<?php
session_start();
include("connect.php");
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