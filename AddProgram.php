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
				<textarea name="Comments" id="Comments" rows="10" cols="60" maxlength='300'>No Translation Notes Added</textarea><br />
				<input type="submit" name="nextsong" value="Add Another Song" /> <input type="submit" name="done" value="Finished" />

			</fieldset>
			</form>

			</div>
			<?php include('footer.php');?>
			
		</div>
	</body>
	</html>