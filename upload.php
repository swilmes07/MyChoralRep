<?php
include('lock.php');



if (isset($_POST['submit']))
{
//Get File Attributes
$name = $_FILES['myfile']['name'];
$size = $_FILES['myfile']['size'];
$tmp_name = $_FILES['myfile']['tmp_name'];

if ($name)
{
	//Start Upload Process
	$location = "avatars/.$name";
	move_uploaded_file($tmp_name,$location);
	$query = mysql_query("UPDATE members SET imagelocation='$location' WHERE UserID='$login_session'");
	die("Your Profile Image Has been uploaded! <a href='welcome.php'>Back To Profile</a>");
}
else{

die("Please select a file!");
}
}
?>
 <meta name="author" content="HIR DESIGNS" />
	     
	    <style type="text/css" media="all">@import "css/master.css";</style>  <style type="text/css" media="all">@import "css/master.css";</style>
	</head>
	 
	<body>
		<div id="page-container">
			<div id="main-nav">
				<ul class="main-menu">
					<li id="about"><a href="index.php"><img src="images/NavAbout.jpg"/></a></li>
					<li id="browse"><a href="#"><img src="images/NavBrowse2.jpg"/></a></li>
					<li id="search"><a href="#"><img src="images/NavSearch.jpg"/></a></li>
					<li id="register"><a href="#"><img src="images/NavReg.jpg"/></a></li>
				</ul>
			</div>
			<div id="header">
				
			</div>
			<div id="sidebar-a">
				 <div class="padding">
					<?php include('view.php'); ?>
					<h4><font color="black">Welcome back <?php echo $login_name; ?>!</font></h4>
				</div>
				<div id="login-content">
					<ul class="login-menu">
						<li id="Edit Profile"><a href="updateUser.php">Edit Profile</a></li>
						<li id="Profile Picture"><a href="upload.php">Change Profile Picture</a></li>
						<li id="Add Program"><a href="AddProgram.php">Add Program</a></li>
						<li id="My Programs"><a href="MyPrograms.php">My Programs</a></li>
						<li id="Most Popular"><a href="MostPopular.php">Most Popular</a></li>
						<li id="Log Out"><a href="logout.php">Log Out</a>
					</ul>
				</div>
			</div>
			<div id="content">
				<?php
				echo "</br> </br>Please select an image to upload: 
					<form action='upload.php' method='POST' enctype='multipart/form-data'>
					File: <input type='file' name='myfile'> <input type='submit' name='submit' value='Upload!'> 
					</form>";
				?>
			</div>
			<div id="footer">
					<div id="altnav">
						
					</div>
				Copyright © MyChoralRep
	 
				Powered by <a href="localhost/hirdesigns">HIR Designs</a> 
		</div>
	</body>
	</html>
