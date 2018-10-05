<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
<?php session_start();?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
html{height:99%;}
body{
	background: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
}
.navbar {
    overflow: hidden;
    background-color:transparent;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float:left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.navbar-right{
	float:right;
}
.heading
{
	    width: 100%;
    height: 89px;
    text-align: center;
    margin-top: 3px;
    font-family: intial;
    font-size: xx-large;
    background: -webkit-linear-gradient(rgba(230, 124, 139, 0.32), #ACB6E5);
    -webkit-background-clip: text;
    -webkit-text-fill-color: #0000008a;
}
.slogn
{
	    text-align: -webkit-center;
   
}


</style>
</head>
<body>
<?php
error_reporting(0);
if($_SESSION["Ad"])
{
	header("location:admin/home.php");
}
if($_SESSION["nm"]) {
?>
 <div class="navbar">
  <a href="index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Exam
      <i class="fat-down"></i> 
    </button>
    <div class="dropdown-content">
     <a href="git_exam.php?id=git_questions">GK</a>
      <a href="git_exam.php?id=git_math">Maths</a>
      <a href="git_exam.php?id=git_sport">Sport</a>
    </div>
  </div> 
  <a href="git_menunews.php">News</a>
  <a href="git_leaderbord.php">ScoreBord</a>
  <a href="git_feedback.php">Feedback</a>
  <a href="about.php">Aboutus</a>
  <div class="navbar-right">
  <a href="profile.php" style="text-transform:uppercase"><?php echo $_SESSION["nm"];?></a>
  <a href="git_logout.php" >Logout</a>
  </div>

</div>


<?php
}else {
?>
<div class="navbar">
  <a href="index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Exam
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="git_withoutloginexam.php">Gk</a>
      <a href="git_withoutloginexam.php">Maths</a>
      <a href="git_withoutloginexam.php">Sports</a> 
    </div>
  </div> 
  <a href="git_menunews.php">News</a>
  <a href="git_leaderbord.php">ScoreBord</a>
  <a href="git_feedback.php">Feedback</a>
  <a href="about.php">Aboutus</a>
  
  <div class="navbar-right">
  <a href="git_login.php" >Login</a>
  <a href="git_register.php" >Register</a>
  </div>
</div>
<div class="heading">
<h1>Gk IQTEST</h1>
</div>
<div class="slogn">
<h1>First Learn Then Simply Remove 'L'</h1>
</div>
<div class="nl">
<?php
?>
</div>

</div>
<?php
}
?>



</body>
</html>
