<?php
include("connect.php");
include("header.php");
$qry="SELECT * 
FROM  `git_result` 
ORDER BY Score DESC ";
$result=mysql_query($qry,$con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="datatable/jquery-3.3.1.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTables.bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="datatable/bootstrap.min.css" />

<link rel="stylesheet" href="datatable/dataTables.bootstrap.min.css" />
<style>
h1
{
	    text-align: center;
    font-family: serif;
    font-size: 50px;
}
</style>
</head>

<body style="background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);">
<div>
<h1>Scorecard</h1>
</div>
<table id="example" class="table table-responsive table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Date</th>
                <th>Type</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
       <?php
        while($row=mysql_fetch_array($result))
        {

         ?>       
            <tr>
                <td><?php echo $row[0]; ?></td>
                 <td><?php echo $row[1]; ?></td>
                  <td><?php echo $row[2]; ?></td>
                   <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
            </tr>
            <?php
        }
        ?>
          
        </tfoot>
    </table>

</body>
<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
</html>