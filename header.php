<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
<?php session_start();?>
	<style>
	body,html{
	height:100%;
}
	.navbar {
    overflow: hidden;
    font-family: Arial, Helvetica, sans-serif;
	text-decoration:none;
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
    background-color: #d9cfb482;
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

	</style>
</head>
	<body>
	<?php
		error_reporting(0);
			if($_SESSION["nm"]) {
	?>
 				<div class="navbar">
                    	<a href="index.php">Home</a>
                 			<div class="dropdown">
                    			<button class="dropbtn">Exam
                      			<i class="fat-down"></i> 
                    			</button>
                    				<div class="dropdown-content">
                                          <a href="git_exam.php?id=git_questions">Gk</a>
      <a href="git_exam.php?id=git_math">Maths</a>
      <a href="git_exam.php?id=git_sport">Sports</a> 
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
	<?php
			}

	?>
</body>
</html>