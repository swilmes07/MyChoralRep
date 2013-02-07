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
			<form id='register' action='AddProgramInitial.php' method='post'
			accept-charset='UTF-8'>
			<fieldset >
			<legend>Add Program </legend>
				<label for='ProgramName' ><b>Program Name*:   </b></br></label>
				<input type='text' name='ProgramName' id='ProgramName' maxlength='30'/></br>
				<label for='ProgramDate' ><b>Program Date (yyyy-mm-dd)*:    </b></br></label>
				<input type='text' name='ProgramDate' id='ProgramDate' maxlength='10'/></br>
				</br>
				</br>
				</br>
				<label for='SongName' ><b>Song Name*:    </b></br></label>
				<input type='text' name='SongName' id='SongName' maxlength='50' /></br>
				<label for='Composer' ><b>Composer*:    </b></br></label>
				<input type='text' name='Composer' id='Composer' maxlength='50' /></br>
				<label for='Arranger' ><b>Arranger:    </b></br></label>
				<input type='text' name='Arranger' id='Arranger' maxlength='50' /></br>
				<b>Translation Notes:</b></br>
				<textarea name="Comments" id="Comments" rows="10" cols="60" maxlength='300'>Insert Translation Notes Here!</textarea><br />
				<input type="submit" name="nextsong" value="Add Another Song" /> <input type="submit" name="done" value="Finished" />

			</fieldset>
			</form>

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