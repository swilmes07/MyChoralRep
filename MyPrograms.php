<?php
include('lock.php');
	$sql = mysql_query("SELECT * FROM programs WHERE ID=$login_id");
	while($row = mysql_fetch_array($sql, MYSQL_ASSOC))
	{
		$programs[] = $row;
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
					<li id="register"><a href="registration.php"><img src="images/NavReg.jpg"/></a></li>
				</ul>
			</div>
			<div id="header">
				
			</div>
			<div id="sidebar-a">
				 <div class="padding">
					<?php include('view.php'); ?>
					<h4><font color="black">Welcome back <?php echo $login_name; ?>!</font></h4>
					<p><font color="black"><b>Employment: </b></font><?=$login_school?><p>
					<p><font color="black"><b>Job Title: </b></font><?=$login_job?><p>
					<p><font color="black"><b>Teaching Level: </b></font><?php 
					 $skills = explode(',',$login_skill);
					 echo "<ul>";
					 foreach ($skills as $s){
						echo "<li>$s</li>";
					 }
					 echo "</ul>";
					 ?></p>
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
				</br>
				</br>
				<H1><font color="black"> Your Programs: </font></H1>
				<ul>
					<?php foreach($programs as $program): ?>	
						</br>
						<li>
						Program Title: <a href="program-view.php?id=<?php print $program['Program_ID'];?>"> <?php print $program['Program_Name'];?></a> <br />
						Program Date: <?php print $program['Program_Date'];?>
						</li>
						
					<?php endforeach; ?>
				</ul>
			</div>
			<div id="footer">
					<div id="altnav">
						<a href="#">About</a> -
						<a href="#">Services</a> -
						<a href="#">Portfolio</a> -
						<a href="#">Contact Us</a> -
						<a href="#">Terms of Trade</a>
					</div>
				Copyright � MyChoralRep
	 
				Powered by <a href="localhost/hirdesigns">HIR Designs</a> 
		</div>
	</body>
	</html>