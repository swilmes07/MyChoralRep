<form id='register' action='insert.php' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<label for='FirstName' >First Name*:   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='text' name='FirstName' id='FirstName' maxlength='30'/></br></br>
<label for='Lastname' >Last Name*: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='text' name='LastName' id='LastName' maxlength="30" /></br></br>
<label for='Email' >Email Address*:  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='text' name='Email' id='Email' maxlength="50" /></br></br>
<label for='Password' >Password*: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='password' name='Password' id='Password' maxlength="30" /></br></br>
<label for='Password2' >Re-enter Password* : &nbsp &nbsp &nbsp </label>
<input type='password' name='Password2' id='Password2' maxlength="30" /></br></br>
<label for='dropdown' >Skill Level*: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
<select name='dropdown'" value="options">
<option value='Elementary'>Elementary</option>
<option value='HighSchool'>Junior/Senior High</option>
<option value='University'>University</option>
<option value='Advanced'>Advanced</option>
</SELECT></br></br>
<input type='submit' name='Submit' value='Submit' />
</fieldset>
</form>

