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
					<?php include('view.php'); ?>
					<h4><font color="black">Welcome back <?php echo $login_name; ?>!</font></h4>
				</div>
				<div id="login-content">
					<ul class="login-menu">
						<li><a href="updateUser.php"><img src="images/EditProfile.jpg" border="0"/></a></li>
						<li><a href="upload.php"><img src="images/ProfilePicture.jpg" border="0"/></a></li>
						<li><a href="AddProgram.php"><img src="images/AddProgram.jpg" border="0"/></a></li>
						<li id="My Programs"><a href="MyPrograms.php"><img src="images/MyPrograms.jpg" border="0"/></a></li>
						<li id="Most Popular"><a href="MostPopular.php"><img src="images/MostPopular.jpg" border="0"/></a></li>
						<li id="Log Out"><a href="logout.php"><img src="images/LogOut.jpg" border="0"/></a>
					</ul>
				</div>
			</div>
			<div id="content">
				<?php
				include('updateUserForm.php');
				?>
			</div>
			<?php include('footer.php');?>
			
		</div>
	</body>
	</html>