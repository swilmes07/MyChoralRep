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
					<li id="register"><a href="registration.php"><img src="images/NavReg.jpg"/></a></li>
				</ul>
			</div>
			<div id="header">
				
			</div>
			<div id="sidebar-a">
				 <div class="padding">
					<?php include('view.php'); ?>
					<h4><font color="black">Welcome back <?php echo $login_name; ?>!</font></h4>
					<p>Teaching Level: <?php echo $login_skill; ?></p>
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
				 <h2>About</h2>
				<p><strong>MyChoralRep</strong> is a website that will bring choral directors from all different regions together to share program information, view trends, and 
												connect with one another. Please feel free to browse the site freely, or search based on one of our multiple criteria. Thanks for looking!</p>
				<p>We are currently undergoing a 'face lift', so if you have any questions or would like more information about the services we provide please feel free to contact us.</p>
	     
				<h2>Contact Us</h2>
				<p>Phone:   (660) 868-0236<br />
				Fax:     *<br />
				Email:   <a href="mailto:swilmes@missouriwestern.edu">swilmes@misouriwestern.edu</a><br />
				</p>
				<p><a href="#">More contact information…</a></p>
			</div
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