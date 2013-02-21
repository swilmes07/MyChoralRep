<?php
include('lock.php');
$program = $_GET['id'];
	
	if(!isset($program)):
		//redirect
	else:
		$sql = mysql_query("SELECT * FROM programs WHERE Program_ID=3");
		$program_information = mysql_fetch_array($sql, MYSQL_ASSOC);
		
		$sql2 = mysql_query("SELECT * FROM songs WHERE Program_ID=3");
		while($row = mysql_fetch_array($sql2, MYSQL_ASSOC))
		{
			$songs[] = $row;
		}
		
	endif;
	
	if(isset($program_information) && !empty($songs)):
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
			<h1 align="center"><?php print $program_information['Program_Name']; ?></h1>
			</br>
			<h2 align="center"><?php print $program_information['Program_Date']; ?></h2>
					<table border="2"  cellpadding="5" align="center"  >
						<tr>
						<td><font color="black"><u><b>Song Name</b></u></font></td>
						<td><font color="black"><u><b>Composer</b></u></font></td>
						<td><font color="black"><u><b>Arranger</b></u></font></td>
						<td style= "word-wrap:break-word;" "max-width:175px;"><font color="black"><u><b>Translation Notes</b></u></font></td>
						</tr>
				<?php foreach($songs as $song): ?>	
						<tr>
						<td><font color="black"><?php print $song['Song_Name'];?></font></td>
						<td><font color="black"><?php print $song['Composer'];?></font></td>
						<td><font color="black"><?php print $song['Arranger'];?></font></td>
						<td style="max-width:175px;"><font color="black"><?php print $song['Translation_Notes'];?></font></td>
						</tr>
						<?php endforeach; ?>
						</table> 
				<?php if($program_information['Location_PDF']){?>
						<table border="0"  cellpadding="5" align="center">
						<td><A HREF="<?php print $program_information['Location_PDF'];?>">
						Download the Program PDF Here!</A> 
						</td>
						</table>
				<?php } ?>
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
		
	<?php else: ?>
		
	<?php endif; ?>
	
	



	




