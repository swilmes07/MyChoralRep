
<form id='update' action='editProfile.php' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Please Update Your Information</legend>
<label for='FirstName' >First Name*:   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='text' name='FirstName' id='FirstName' value='<?php echo $login_name?>' maxlength='30'/></br></br>
<label for='Lastname' >Last Name*: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='text' name='LastName' id='LastName' value='<?php echo $login_last?>' maxlength="30" /></br></br>
<label for='Email' >Email Address*:  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='text' name='Email' id='Email' value='<?php echo $login_session?>' maxlength="50" /></br></br>
<label for='Password' >Password*: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='password' name='Password' id='Password' value='<?php echo $login_pass?>' maxlength="30" /></br></br>
<label for='Password2' >Re-enter Password* : &nbsp &nbsp &nbsp </label>
<input type='password' name='Password2' id='Password2' value='<?php echo $login_pass?>' maxlength="30" /></br></br>
<label for='dropdown' >Skill Level*: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
<select name='dropdown'" value="options">
<option value='Elementary'>Elementary</option>
<option value='JuniorHigh'>Junior High</option>
<option value='HighSchool'>High School</option>
<option value='University'>University</option>
<option value='CommunityChorus'>Community Chorus</option>
</SELECT></br></br>
<input type='submit' name='Submit' value='Submit' />
</fieldset>
</form>
