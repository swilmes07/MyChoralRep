<?php
include('lock.php');
?>

		<?php include('header.php');?>
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
				<textarea name="Comments" id="Comments" rows="10" cols="60" maxlength='300'>No Translation Notes Added</textarea><br />
				<input type="submit" name="nextsong" value="Add Another Song" /> <input type="submit" name="done" value="Finished" />

			</fieldset>
			</form>

			</div>
			<?php include("footer.php");?>
	</body>
	</html>