<?php include("header.php");?>
<html>
<head>
<style>
body{
	background: linear-gradient(to right,#36D1DC,#5B86E5);
	}
	h1{
		font-family: monospace;
    font-size: 137px;
    color: bisque;
	}
	.button {
  display: inline-block;
  border-radius: 4px;
  background-color:darkgrey;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
 
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
<h1 align="center">Go And Login</h1>
<form>
<button class="button" name="login" style="vertical-align:middle;    margin-left: 290px">
<span> Login</span>
</button>
<button class="button" name="regsiter" style="vertical-align:middle;    margin-left: 190px">
<span> Register</span>
</button>
</form>
</body>
</html>
<?php
if(isset($_REQUEST['login']))
{
	header('Location:git_login.php');
}
if(isset($_REQUEST['regsiter']))
{
	header('Location:git_register.php');
}
?>