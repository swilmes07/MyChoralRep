 <?php
include('lock.php');
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
					<h4><font color="black">Welcome back <?php echo $login_name; ?>!</font></h4>
				</div>
				<div id="login-content">
					<ul class="login-menu">
						<li id="Edit Profile"><a href="#">Edit Profile</a></li>
						<li id="Add Program"><a href="#">Add Program</a></li>
						<li id="My Programs"><a href="#">My Programs</a></li>
						<li id="Most Popular"><a href="#">Most Popular</a></li>
						<li id="Log Out"><a href="logout.php">Log Out</a>
					</ul>
				</div>
			</div>
			<div id="content">
				<?php
				include('updateUserForm.php');
				?>
			</div>
			<div id="footer">
					<div id="altnav">
						<a href="#">About</a> -
						<a href="#">Services</a> -
						<a href="#">Portfolio</a> -
						<a href="#">Contact Us</a> -
						<a href="#">Terms of Trade</a>
					</div>
				Copyright © MyChoralRep
	 
				Powered by <a href="localhost/hirdesigns">HIR Designs</a> 
		</div>
	</body>
	</html>